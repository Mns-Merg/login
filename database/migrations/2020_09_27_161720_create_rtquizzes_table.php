<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRtquizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rtquizzes', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('answer_A');
            $table->string('answer_B');
            $table->string('answer_C');
            $table->string('answer_D');
            $table->string('correct_answer');
            $table->string('class');
            $table->string('vote')->default('yes');
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
        Schema::dropIfExists('rtquizzes');
    }
}
