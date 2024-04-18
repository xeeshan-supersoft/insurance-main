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
      $table->string('name');
      $table->string('address');
      $table->string('city');
      $table->string('state');
      $table->string('zip');
      $table->string('cellphone');
      $table->string('extra_email')->nullable();
      $table->string('fax', 255)->nullable();
      $table->string('producer_customer_number', 255)->nullable();
      $table->tinyInteger('is_active')->default(1);
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
    Schema::dropIfExists('_infos');
  }
};
