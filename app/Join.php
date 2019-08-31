<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Join extends Model
{
    protected $fillable =["user_id", "competition_id"];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
