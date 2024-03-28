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
    Schema::create('shipper_infos', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->string('shipper_address');
      $table->string('shipper_city');
      $table->string('shipper_state');
      $table->string('shipper_zip');
      $table->string('shipper_cellphone');
      $table->string('shipper_extra_email')->nullable();
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
    Schema::dropIfExists('_shipper_infos');
  }
};
