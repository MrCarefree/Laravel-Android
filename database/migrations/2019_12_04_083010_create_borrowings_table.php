<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBorrowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('book_id');
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('librarian_id');
            $table->date('tanggal_peminjaman');
            $table->date('tanggal_pengembalian');
            $table->enum('status', ['dipinjam', 'dikembalikan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowings');
    }
}
