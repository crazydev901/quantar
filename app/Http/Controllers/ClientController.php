<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ClientController extends Controller
{
    //
    public function dashboard()
    {
        $topics = [

            "Asset/Fleet Managment",
            "Content center automation",
            "Demand Forecasting",
            "IT Automation",
            "Process Optimization",
            "Quality Control",
            "Supply Chain Optimization",
            "Automated Processing",
            "Customer Service",
            "Intelegent image",
            "Personalization",
            "Public Safety",
            "Sales Process Automation",

        ];
        return view("client.dashboard", compact("topics"));
    }

    //
    public function createCampaign(Request $request)
    {
        $req =  auth()->user()->campaign_requests()->create([
          "name"          => $request->name,
          "timing"        => $request->timing,
          "data_type"     => $request->data_type,
          "topic"         => $request->topic,
          "is_anonimyzed" => $request->is_anonimyzed,
          "star_date"     => $request->start_date,
          "status"        => "processing"
        ]);

        if ($request->comment != "") {
            Contact::create([
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'number' => auth()->user()->number,
                'subject' => "Campaign Additional Comment",
                'message' => $request->comment
            ]);
        }
        return response()->json("ok",200);
    }

    //
    public function campaigns()
    {
        $requests = auth()->user()->campaign_requests;
        return view("client.requests", compact("requests"));
    }

    public function myCampaigns()
    {
        $requests = auth()->user()->campaign_requests;
        return view("client.my-campaigns", compact("requests"));
    }
    //
    public function moreInfo()
    {
        return view("client.more-info");
    }

    public function accountDetails()
    {
        return view("client.account-details");
    }

    public function contact()
    {
        return view("client.contact");
    }
}
