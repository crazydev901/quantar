<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "FrontControlls@index");
Route::get('/register-scientist', "FrontControlls@registerScientist");
Route::get('/register-company', "FrontControlls@registerCompany");
Route::get('/f-login', "FrontControlls@firstLogin");

Route::get('/noauth', "FrontControlls@noauth");
Route::get('//wellcome/step2', "FrontControlls@index_step2");
Route::get('/competition', "FrontControlls@competition")->name("competitions");

Route::post('save/contact', "FrontControlls@saveContact_1");

Route::post('save_booking', "FrontControlls@saveBooking");
Route::post('code_auth', "FrontControlls@code_auth");

Route::get('/competitions/{competition}', "FrontControlls@show")->middleware("auth")->name("competitions.index");
Route::post('/competitions/{competition}', "CompetitionController@uploadResult")->middleware("auth")->name("competitions.upload");

Route::get('/faq', function () {
    return view('faq');
})->name("faq");

Route::get('/corporate', function () {
    return view('corporate');
})->name("corporate");

Route::post('/corporate', "FrontControlls@saveCorporate");
Route::post('/contactUs', "FrontControlls@contactUs");
Route::get('/corporate/{passcode}', "FrontControlls@corporate");
Route::get('/learn', "FrontControlls@blog")->name("learn");
Route::get('/learn/{post}', "FrontControlls@post")->name("learn.index");

Route::get('/community', function () {
    $users = \App\User::inRandomOrder()->take(9)->get();
    return view('data_scientist', compact("users"));
})->name("community");

Route::get('/top_user', function () {
    return view('top_user');
})->name("top_user");

Route::get('/user/{user}', "FrontControlls@user_profile")->name("user_cabinet");

Route::get('/about-us', function () {
    return view('about_us');
})->name("about-us");

Route::get('/privacy', function () {
    return view('page');
});

Route::get('/terms', function () {
    return view('terms');
});


Route::group(['middleware' => ['auth'], "prefix" => "client"], function () {
    Route::get('/dashboard', "ClientController@dashboard")->name("client.dashboard");
    Route::post('/dashboard', "ClientController@createCampaign")->name("client.create_campaign");
    Route::get('/campaign-requsts', "ClientController@campaigns")->name("client.campaigns");
    Route::get('/my-campaigns', "ClientController@myCampaigns")->name("client.my_campaigns");
    Route::get('/more-info', "ClientController@moreInfo")->name("client.more_info");
    Route::get('/account-details', "ClientController@accountDetails")->name("client.account_details");
    Route::get('/contact', "ClientController@contact")->name("client.contact");

    Route::post('/save_contact', "FrontControlls@saveContact");
    Route::post('/save_compaign', "ClientController@createCampaign");
    
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/profile', "FrontControlls@profile")->name("profile");
    Route::get('/profile/edit', function () {
        $user = auth()->user();
        return view('edit_user', compact("user"));
    })->name("edit");
    Route::post('/profile/edit', "FrontControlls@updateProfile");

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback/google', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', function () {
    return redirect("/", 301);
})->name('home');
Route::get('/update-users', function () {
    foreach (\App\User::where('psw', null)->get() as $user ){
        $user->update(["psw" => str_random("9")]);
    }
});
