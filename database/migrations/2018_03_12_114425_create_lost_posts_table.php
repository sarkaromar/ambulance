<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLostPostsTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lost_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lost_cat_id');
            $table->string('lost_item_name');
            $table->string('lost_item_image')->nullable();
            $table->integer('lost_divi_id');
            $table->integer('lost_area_id');
            $table->date('lost_date');
            $table->integer('lost_reword')->nullable();
            $table->text('lost_reword_note')->nullable();
            $table->text('lost_details');
            $table->integer('lost_status')->default(2)->comment('0 = inactive, 1 = active, 2 = pending');
            $table->string('lost_address');
            $table->integer('lost_post_by')->nullable();
            $table->integer('lost_user_type')->nullable()->comment('0 = user, 1 = admin');;
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
        Schema::dropIfExists('lost_posts');
    }
}
