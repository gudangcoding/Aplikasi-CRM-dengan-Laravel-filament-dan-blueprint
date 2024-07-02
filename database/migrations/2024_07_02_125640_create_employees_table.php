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

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ["admin","employee","customer","supplier"])->default('employee');
            $table->foreignId('Departement_id')->constrained();
            $table->foreignId('Position_id')->constrained();
            $table->string('name');
            $table->string('email');
            $table->date('joined');
            $table->enum('status', ["aktif","resign"])->default('aktif');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
