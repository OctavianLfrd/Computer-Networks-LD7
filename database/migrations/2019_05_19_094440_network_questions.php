<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NetworkQuestions extends Migration
{
    public function up()
    {
        Schema::create('NetworkQuestions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question', 256);
            $table->string('subject', 80);
        });
    }

    public function down()
    {
        Schema::dropIfExists('NetworkQuestions');
    }
}
