<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['title','synopsis','author_id, genre_id' ];

    public function authors(): BelongsTo
    {
        return $this->BelongsTo(Author::class);
    }

    public function genres(): BelongsTo
    {
        return $this->BelongsTo(Genre::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
