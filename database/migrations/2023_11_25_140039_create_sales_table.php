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
        Schema::create('sales', function (Blueprint $table) {
            $table->ulid("id")->primary();
            $table->foreignUlid("book_id")->references("id")->on("users")->cascadeOnDelete();
            $table->foreignUlid("member_id")->references("id")->on("users")->cascadeOnDelete();
            $table->foreignUlid("user_id")->references("id")->on("users")->cascadeOnDelete();
            $table->integer("price");
            $table->integer("quantity");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
