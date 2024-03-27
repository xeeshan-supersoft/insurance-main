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
        Schema::create('certificate_policies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('certificate_id')->constrained('certificates');
            $table->foreignId('policy_type_id')->constrained('policy_types');
            $table->foreignId('policy_id')->constrained('policies');
            $table->integer('policy_deductible')->default(0);
            $table->integer('policy_retention')->default(0);
            $table->tinyInteger('is_policy_checked')->default(0);
            $table->tinyInteger('is_risk_retention_insured')->default(0);
            $table->tinyInteger('is_actual_cash_value')->default(0);
            $table->foreignId('insurance_provider_id')->constrained('insurance_providers');
            $table->string('insurance_provider_code', 255);
            $table->string('policy_number', 255);
            $table->date('issue_date');
            $table->date('start_date');
            $table->date('expiry_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificate_policies');
    }
};
