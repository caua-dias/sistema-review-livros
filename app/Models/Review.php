<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $fillable = ['grade','text', 'reader_id', 'book_id' ];

    public function reader(): BelongsTo
    {
        return $this->belongsTo(Reader::class);
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
