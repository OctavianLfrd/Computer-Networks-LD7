<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkTitles extends Migration
{
    public function up()
    {
        Schema::create('WorkTitles', function (Blueprint $table) {
            $table->integer('work_id');
            $table->string('title', 60);
        });
    }

    public function down()
    {
        Schema::dropIfExists("WorkTitles");
    }
}
