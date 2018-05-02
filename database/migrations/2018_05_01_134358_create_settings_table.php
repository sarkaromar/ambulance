<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('setting_id');
            $table->string('setting_logo')->nullable();
            $table->string('setting_phone1')->nullable();
            $table->string('setting_phone2')->nullable();
            $table->string('setting_email1')->nullable();
            $table->string('setting_email2')->nullable();
            $table->string('setting_address1')->nullable();
            $table->string('setting_address2')->nullable();
            $table->string('setting_fb')->nullable();
            $table->string('setting_skype')->nullable();
            $table->string('setting_twitter')->nullable();
            $table->string('setting_youtube')->nullable();
            $table->string('setting_instagram')->nullable();
            $table->string('setting_total_amb')->nullable();
            $table->string('setting_total_driver')->nullable();
            $table->string('setting_total_client')->nullable();
            $table->string('setting_total_day')->nullable();
            $table->text('setting_home_text')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
