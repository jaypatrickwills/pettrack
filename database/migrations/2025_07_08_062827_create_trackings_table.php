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
        Schema::create('trackings', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_number')->unique();
            $table->string('pet_name');
            $table->string('pet_type');
            $table->string('pet_breed')->nullable();
            $table->string('origin');
            $table->string('destination');
            $table->string('owner_name');
            $table->string('owner_email');
            $table->string('owner_phone');
            $table->date('departure_date');
            $table->date('estimated_arrival_date');
            $table->enum('status', ['pending', 'in_transit', 'delivered', 'delayed'])->default('pending');
            $table->text('current_location')->nullable();
            $table->text('notes')->nullable();
            $table->foreignId('admin_id')->nullable()->constrained('admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trackings');
    }
};
