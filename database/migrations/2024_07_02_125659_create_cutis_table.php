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
        Schema::disableForeignKeyConstraints();

        Schema::create('cutis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('Employees');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('type', ["aktif","cuti"])->default('aktif');
            $table->enum('status', ["pending","accepted","rejected"])->default('pending');
            $table->text('reason')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
