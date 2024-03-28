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
    Schema::create('agency_infos', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->string('agency_address');
      $table->string('agency_city');
      $table->string('agency_state');
      $table->string('agency_zip');
      $table->string('agency_cellphone');
      $table->string('agency_extra_email')->nullable();
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
    Schema::dropIfExists('_agency_infos');
  }
};
