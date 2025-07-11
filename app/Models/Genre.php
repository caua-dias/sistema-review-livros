<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    protected $table = 'genres';
    protected $fillable = ['name'];

    public function books(): HasMany 
    {
        return $this->hasMany(Book::class);
    }
}
