<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurvesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surves', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->integer('q1');
            $table->integer('q2');
            $table->integer('q3');
            $table->integer('q4');
            $table->integer('q5');
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
        Schema::dropIfExists('surves');
    }
}
