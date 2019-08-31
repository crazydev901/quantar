<?php

namespace App\Http\Controllers;

use App\Competition;
use App\Contact;
use App\Emailrequest;
use App\Join;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class FrontControlls extends Controller
{
    public function index()
    {
        if (session("psw") == setting('site.scientists_key'))
            return view('welcome');
        elseif (auth()->user() && (session("psw") == auth()->user()->psw) && auth()->user()->hasRole("company")  ) {
            return redirect("client/dashboard");
        } else {
            return view('welcome_noauth');
        }

    }

    public function noauth()
    {
        return view('welcome_noauth');
    }

    public function firstLogin()
    {
        if (auth()->user() && session("psw") == setting('site.scientists_key') && !auth()->user()->hasRole("company"))
            return view('welcome');
        elseif (auth()->user() && (session("psw") == auth()->user()->psw) && auth()->user()->hasRole("company")  ) {
            return redirect("client/dashboard");
        } else {
            return view('join.login');
        }
    }
    
    public function registerScientist()
    {
        return view('join.registerS');
    }
    
    public function registerCompany()
    {
        return view('join.registerC');
    }

    public function index_step2()
    {

        return view('welcome_step2');
    }

    public function code_auth(Request $request)
    {
        $type = $request->type;
        $password = $request->code;
        if ($type == "scientist" && $password == setting('site.scientists_key')) {
            session(["psw" => $password]);
            return response()->json(["user" => 'scientist'],200);
        } 
        if ($type == "company") {
            $user = User::where("psw", $password)->first();
            if ($user == null) {
                return response()->json(["user" => "fail"],200);
            }
            else {
                Auth::login($user);
                session(["psw" => $user->psw]);
                return response()->json(["user" => $user->name],200);   
            }
        }
        else {
            return response()->json(["user" => 'fail'],200);
        }
    }

    //
    public function competition()
    {
        $competitions = Competition::all();

        return view("competition", compact("competitions"));
    }

    public function show(Competition $competition)
    {
        $user = auth()->user();

        $join = Join::firstOrCreate([
            "user_id" => $user->id,
            "competition_id" => $competition->id
        ]);
        return view("competition_index", compact("competition"));
    }

    public function blog()
    {
        $posts = Post::orderBy("created_at", "DESC")->get();
        $categories = Category::all();
        return view('blog', compact("posts", "categories"));
    }

    public function post(Post $post)
    {
        return view('blog_index', compact("post"));
    }

    public function profile()
    {
        $user = auth()->user();
        $competitions = $user->competitions;
        return view('user_profile', compact("user", "competitions"));
    }

    public function user_profile(User $user)
    {
        $competitions = $user->competitions;
        return view('user_profile', compact("user", "competitions"));
    }

    public function corporate($passcode)
    {
        $passcode = base64_decode($passcode);
        if ($passcode === "quantPass123" . date("h")) {
            return view('corporate', compact("passcode"));
        }
        return view('corporate');
    }

    public function saveCorporate(Request $request)
    {


        if (!isset($request->action)) {
            return redirect()->back();
        }


        if ($request->action == "access") {
            $request->validate([
                "email" => "required|email",
                "passcode" => "required|string"
            ]);
        } elseif ($request->action == "request") {
            $request->validate([
                "email" => "required|email",
            ]);
            $email = Emailrequest::firstOrCreate([
                "email" => $request->email
            ]);
            return redirect()->back()->with("success", $request->email);
        }
        $passcode = $request->passcode;
        if ($passcode == "quantPass123") {
            $url = base64_encode("quantPass123" . date("h"));
            return redirect("corporate/" . $url);
        }
        return redirect("/corporate");
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "bio" => "required|string",
        ]);

        $user = auth()->user();

        $user->name = $request->name;
        $user->bio = $request->bio;
        $user->location = $request->location;
        $user->university = $request->university;
        if (isset($request->gender)) $user->gender = $request->gender;
        $user->save();
//        dd( auth()->user() );

        return redirect("/profile");
    }

    public function contactUs(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
//        dd($request->all());
        //ContactUs::create($request->all());
        Contact::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')
        ]);
        return back()->with('success', 'Thanks for contacting us!');
    }

    public function saveContact_1(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
        ]);
//        dd($request->all());
        //ContactUs::create($request->all());
        Contact::create([
            'name' => "Subscriber",
            'email' => $request->get('email'),
            'message' => "Landing page request information"
        ]);
        return back()->with('success', 'Thanks for your email!');
    }

    public function saveContact(Request $request){
        
//        dd($request->all());
        //ContactUs::create($request->all());
        Contact::create([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'number' => auth()->user()->number,
            'subject' => "Have questions",
            'message' => $request->message
        ]);
        return back()->with('success', 'Thanks for your email!');
    }

    public function saveBooking(Request $request){
        // $this->validate($request, [
        //     'name': 'required',
        //     'email' => 'required|email',
        //     'number': 'required',
        //     'subject': 'required',
        //     'message': 'required',
        // ]);
//        dd($request->all());
        //ContactUs::create($request->all());
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'subject' => $request->subject,
            'message' => $request->message
        ]);
        return back()->with('success', 'Thanks for your email!');
    }

}
