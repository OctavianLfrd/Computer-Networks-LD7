<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    public function up()
    {
        Schema::create('Comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date')->nullable();
            $table->integer('work_id')->nullable();
            $table->string('client', 15)->nullable();
            $table->string('text', 200)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Comments');
    }
}
