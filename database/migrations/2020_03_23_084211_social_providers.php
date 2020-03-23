<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SocialProviders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_providers', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->refences('id')->on('users');
            $table->string('provider_id');
            $table->string('provider');
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
        Schema::dropIfExists('social_providers');
    }
}
