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
            $table->string('photo',200)->nullable();
            $table->string('video',20)->nullable();
            $table->integer('songs_number')->nullable();
            $table->integer('members')->nullable();
            $table->integer('eps')->nullable();
            $table->integer('discs')->nullable();
            $table->string('facebook',200)->nullable();
            $table->string('instagram',200)->nullable();
            $table->string('youtube',200)->nullable();
            $table->string('tocatas',200)->nullable();
            $table->string('concerts',200)->nullable();
            $table->boolean('hosting')->nullable();
            $table->integer('amplification')->nullable();
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
