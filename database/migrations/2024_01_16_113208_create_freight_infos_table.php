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
    Schema::create('freight_infos', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->string('freight_address');
      $table->string('freight_city');
      $table->string('freight_state');
      $table->string('freight_zip');
      $table->string('freight_cellphone');
      $table->string('freight_extra_email')->nullable();
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
    Schema::dropIfExists('freight_infos');
  }
};
