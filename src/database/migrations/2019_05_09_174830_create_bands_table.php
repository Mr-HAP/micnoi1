<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->bigIncrements('band_id');
            $table->string('name',100);
            $table->string('country',50);
            $table->string('region',50);
            $table->string('city',80);
            $table->string('photo',200);
            $table->string('video',20);
            $table->integer('songs_number');
            $table->integer('members');
            $table->integer('eps');
            $table->integer('discs');
            $table->string('facebook',200);
            $table->string('instagram',200);
            $table->string('youtube',200);
            $table->string('tocatas',200);
            $table->string('concerts',200);
            $table->boolean('hosting');
            $table->integer('amplification');
            $table->integer('id_admin_band')->unsigned();
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
        Schema::dropIfExists('bands');
    }
}
