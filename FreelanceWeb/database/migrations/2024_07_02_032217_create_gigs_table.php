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
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('freelancer_id');
            $table->string('title');
            $table->string('image')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_categoey')->nullable();
            $table->string('service_type')->nullable();
            $table->string('description')->nullable();
            $table->json('keywords')->nullable();
            $table->json('packages')->nullable();
            $table->json('faqs')->nullable();
            $table->json('questions')->nullable();
            $table->foreign('freelancer_id')->references('id')->on('freelancer_data')->onDelete('cascade');




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gigs');
    }
};
