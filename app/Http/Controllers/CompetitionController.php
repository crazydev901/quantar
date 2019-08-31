<?php

namespace App\Http\Controllers;

use App\Competition;
use App\CompetitionsUpload;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function uploadResult(Competition $competition, Request $request)
    {
        $request->validate([
            "result" => "required|file|mimes:zip"
        ]);
        $slug = 'storage/competitions/uploads';
        $slug_db = 'competitions/uploads';
        $upload_path = $slug . '/' . date('F') . date('Y') . '/';
        $upload_path_db = $slug_db . '/' . date('F') . date('Y') . '/';

        $file = $request->file('result');

        $filename = $upload_path_db . $file->getClientOriginalName();

        $upload = [
            ["download_link" => $filename,
            "original_name" => $file->getClientOriginalName()]
        ];

        $newResult = CompetitionsUpload::firstOrCreate([
            "user_id" => auth()->id(),
            "competition_id" => $competition->id
        ]);

        $newResult->update([
            "result" => json_encode($upload),
            "status" => "New"
        ]);
        if ($newResult) {
            $file->move($upload_path, $file->getClientOriginalName());
        }
        return redirect()->back();
    }

}
