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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->string('deskripsi_singkat');
            $table->string('keyword');
            $table->foreignId('id_kategori')->nullable()->references('id')->on('blogkategoris')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreignId('id_tags')->nullable()->references('id')->on('blogtags')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->string('status');
            $table->date('date');
            $table->longText('deskripsi');
            $table->string('image');
            $table->string('nama_penulis');
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
