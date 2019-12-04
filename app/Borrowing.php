<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $table = 'borrowings';
    public $fillable = ['book_id', 'member_id', 'librarian_id', 'tanggal_peminjaman', 'tanggal_pengembalian', 'status'];

    public function book(){
        return;
    }
}
