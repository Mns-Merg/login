<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('answer_A');
            $table->string('answer_B');
            $table->string('answer_C');
            $table->string('answer_D');
            $table->string('correct_answer');
            $table->string('alt_question')->nullable();
            $table->string('alt_answer_A')->nullable();
            $table->string('alt_answer_B')->nullable();
            $table->string('alt_answer_C')->nullable();
            $table->string('alt_answer_D')->nullable();
            $table->string('alt_correct_answer')->nullable();
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
        Schema::dropIfExists('quizzes');
    }
}
