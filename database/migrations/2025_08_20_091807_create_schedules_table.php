<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->date('apply_start_date')->nullable();
            $table->date('apply_last_date')->nullable();
            $table->date('fee_last_date')->nullable();
            $table->date('correction_start_date')->nullable();
            $table->date('correction_end_date')->nullable();
            $table->string('exam_date')->nullable();
            $table->string('admit_card')->nullable();
            $table->string('result_date')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
