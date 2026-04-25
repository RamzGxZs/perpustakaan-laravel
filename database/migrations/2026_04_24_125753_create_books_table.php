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
			$table->id();
			$table->string('title');
			$table->string('author');
			$table->text('descriptions');
			$table->integer('pages')->default(1);
			$table->string('book_url')->nullable();
			$table->string('book_image')->nullable();
			$table->integer('book_readed')->nullable();
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
