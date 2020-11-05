<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public function borrowedBy() {
      return $this->belongsTo(Student::class, 'borrowed_id');
    }

    public function borrowedBook() {
      return $this->belongsTo(Book::class, 'book');
    }
}
