<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CompetitionsUpload extends Model
{
    protected $fillable = [ "user_id", "competition_id","result" ,"status"];


    public function competition(){
        return $this->belongsTo("App\Competition");
    }
    public function user(){
        return $this->belongsTo("App\User");
    }
}
