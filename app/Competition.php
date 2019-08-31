<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Competition extends Model
{
    protected $casts = [
        //"data" => "json"
    ];

    public function getCategoryImage($size = "")
    {
        $size .= ($size != "") ? "-" : "";
        $img = "/assets/img/competitions/" . $size . $this->category . ".png";
        return asset($img);
    }

    public function started()
    {

        if (Auth::guest()) return false;
        $user = auth()->user();
        if (Join::where("user_id", $user->id)->where("competition_id", $this->id)->get()) {
            return true;
        } else return false;

    }

    public function results(){
        return $this->hasOne("App\CompetitionsUpload")->where("user_id", auth()->id());
    }

}
