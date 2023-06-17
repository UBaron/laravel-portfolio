<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('test_name');
            $table->float('weighting_factor');
            $table->decimal('lowest_passing_grade', $precision = 3, $scale = 1)
                ->default(5.5)->comment('Lowest grades to pass so average calculations can be applied.');
            $table->decimal('best_grade', $precision = 3, $scale = 1)->nullable();
            $table->date('passed_at')->nullable()
                ->comment('Date that the grades was larger than or equal to the lowest passing grades.');
            $table->timestamps();

            $table->foreign('course_id')
                ->references('id')
                ->on('courses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grades');
    }
};
