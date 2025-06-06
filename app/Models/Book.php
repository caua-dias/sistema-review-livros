<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['title','synopsis','author_id', 'genre_id' ];

    public function author(): BelongsTo
    {
        return $this->BelongsTo(Author::class);
    }

    public function genre(): BelongsTo
    {
        return $this->BelongsTo(Genre::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
