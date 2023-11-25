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
        Schema::create('books', function (Blueprint $table) {
            $table->ulid("id")->primary();
            $table->foreignUlid("author_id")->references("id")->on("authors")->cascadeOnDelete();
            $table->foreignUlid("book_type_id")->references("id")->on("book_types")->cascadeOnDelete();
            $table->foreignUuid("user_id")->references("id")->on("users")->cascadeOnDelete();
            $table->string("title");
            $table->integer("price");
            $table->string("cover");
            $table->integer("sales_stock")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
