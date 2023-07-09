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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 20);
            $table->string('sum_cost', 10);
            $table->string('num_grade3', 5);
            $table->string('cost_grade3', 10);
            $table->string('ratio_grade3', 3);
            $table->string('num_grade2', 5);
            $table->string('cost_grade2', 10);
            $table->string('ratio_grade2', 3);
            $table->string('num_grade1', 5);
            $table->string('cost_grade1', 10);
            $table->string('ratio_grade1', 3);
            $table->string('sum_people', 5);
            $table->string('collect_money', 10);
            $table->string('change', 10);
            $table->string('average', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
};
