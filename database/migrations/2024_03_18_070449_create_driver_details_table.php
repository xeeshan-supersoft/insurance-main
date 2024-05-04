<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('driver_details', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained('users');
      $table->string('name')->nullable();
      $table->string('address', 255)->nullable();
      $table->string('address2', 255)->nullable();
      $table->string('state', 255)->nullable();
      $table->string('city', 255)->nullable();
      $table->string('zip', 255)->nullable();
      $table->string('cellphone', 255)->nullable();
      $table->string('license_number', 255)->nullable();
      $table->date('license_expiry_date')->nullable();
      $table->string('license_type', 255)->nullable();
      $table->integer('years_of_experience')->nullable();
      $table->string('vehicle_registration_number', 255)->nullable();
      $table->string('vehicle_make', 255)->nullable();
      $table->string('vehicle_model', 255)->nullable();
      $table->integer('vehicle_year')->nullable();
      $table->string('vehicle_capacity', 255)->nullable();
      $table->string('vehicle_status', 50)->nullable();
      $table->string('mc_number', 255)->nullable();
      $table->string('extra_email', 255)->nullable();
      $table->tinyInteger('is_active')->default(1);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('driver_details');
  }
};
