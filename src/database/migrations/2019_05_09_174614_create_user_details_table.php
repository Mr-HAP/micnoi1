<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id_user_detail');
            $table->integer('id_user');
            $table->string('country',50);
            $table->string('city',50);
            $table->string('photo',200);
            $table->string('video',200);
            $table->string('facebook',200);
            $table->string('instagram',200);
            $table->string('youtube',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
