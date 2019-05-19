<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Answers extends Migration
{
    public function up()
    {
        Schema::create('Answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date')->nullable();
            $table->integer('question_id')->nullable();
            $table->string('client', 15)->nullable();
            $table->string('text', 200)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Answer');
    }
}
