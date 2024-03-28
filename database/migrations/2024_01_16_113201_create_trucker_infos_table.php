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
    Schema::create('trucker_infos', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->date('license_expiry_date');
      $table->string('trucker_address');
      $table->string('trucker_city');
      $table->string('trucker_state');
      $table->string('trucker_zip');
      $table->string('trucker_cellphone');
      $table->string('trucker_extra_email')->nullable();
      $table->string('cdl_number');
      $table->string('mc_number');
      $table->enum('status', ['active', 'inactive']);
      $table->timestamps();

      $table
        ->foreign('user_id')
        ->references('id')
        ->on('users');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('trucker_infos');
  }
};
