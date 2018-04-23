<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoundPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('found_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('found_cat_id');
            $table->string('found_item_name');
            $table->string('found_item_image')->nullable();
            $table->integer('found_divi_id');
            $table->integer('found_area_id');
            $table->date('found_date');
            $table->text('found_details');
            $table->integer('found_status')->default(2)->comment('0 = inactive, 1 = active, 2 = pending');
            $table->string('found_address');
            $table->integer('found_post_by')->nullable();
            $table->integer('found_user_type')->nullable()->comment('0 = user, 1 = admin');;
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
        Schema::dropIfExists('found_posts');
    }
}
