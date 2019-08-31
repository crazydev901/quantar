<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaign_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->text("timing")->nullable();
            $table->text("data_type")->nullable();
            $table->text("topic")->nullable();
            $table->text("is_anonimyzed")->nullable();
            $table->text("star_date")->nullable();
            $table->text("user_id")->nullable();
            $table->text("status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaign_requests');
    }
}
