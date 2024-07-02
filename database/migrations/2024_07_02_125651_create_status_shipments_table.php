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

        Schema::create('status_shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shipment_id')->constrained();
            $table->enum('status', ["pending","shipped","delivered","canceled"])->default('pending');
            $table->string('via');
            $table->text('description');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_shipments');
    }
};
