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

        Schema::create('shipment_details', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_number');
            $table->string('sender_address');
            $table->string('recipient_address');
            $table->decimal('weight', 5, 2);
            $table->decimal('volume', 5, 2);
            $table->enum('status', ["pending","shipped","delivered","canceled"])->default('pending');
            $table->foreignId('customer_id');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_details');
    }
};
