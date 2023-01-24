<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->string('title');
            $table->string('message');
            $table->timestamps();

            // $table->bigIncrements`('id');
            // $table->timestamps();`
        });
    }

    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
