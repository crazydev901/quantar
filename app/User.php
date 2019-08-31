<?php

namespace App;

use Illuminate\Notifications\Notifiable;
class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    public static function boot()
    {
        parent::boot();
        static::creating(function($user)
        {
            $user->psw = str_random(8);
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', "bio", "location", "university", "gender", "psw"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function rank(){
        return User::where("balance", ">", $this->balance)->count() +1;
    }

    public function competitions()
    {
        return $this->hasManyThrough('App\Competition', 'App\Join', "user_id", "id", "id", "competition_id");
    }

    public function randomAvatar(){

        return "assets/img/scientists/".((strlen($this->email) % 3)+1).".png";

    }

    public function campaign_requests(){
        return $this->hasMany("App\CampaignRequest");
    }

}
