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
        Schema::create('bank_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bank_id')->nullable();

            $table->string('ifsc_code');

            $table->string('micr_code')->nullable();

            $table->string('address')->nullable();

            $table->string('branch')->nullable();

            $table->string('phone_number')->nullable();

            $table->string('branch_code')->nullable();

            $table->string('zipcode')->nullable();

            $table->unsignedBigInteger('country_id')->nullable();

            $table->unsignedBigInteger('state_id')->nullable();

            $table->unsignedBigInteger('city_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_details');
    }
};
