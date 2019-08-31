<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignRequest extends Model
{
    //
    protected $table = "campaign_requests";
    protected $fillable = [
        "name",
        "timing",
        "data_type",
        "topic",
        "is_anonimyzed",
        "star_date",
        "user_id",
        "status"
    ];

}
