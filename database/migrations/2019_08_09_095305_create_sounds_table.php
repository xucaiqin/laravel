<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('picture');
            $table->string('content');
            $table->tinyInteger('ishot');
            $table->tinyInteger('iscommend');
            $table->unsignedInteger('like');
            $table->unsignedInteger('click');
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
        Schema::dropIfExists('sounds');
    }
}
