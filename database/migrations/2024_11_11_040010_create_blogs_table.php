<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('product'); // Mengganti 'title' dengan 'product'
            $table->text('keterangan')->nullable(); // Menambahkan 'keterangan' sebagai kolom nullable
            $table->decimal('harga', 10, 2); // Menambahkan kolom harga
            $table->decimal('diskon', 5, 2)->nullable(); // Menambahkan kolom diskon
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
