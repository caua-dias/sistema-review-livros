<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reader extends Model
{
    protected $table = 'readers';
    protected $fillable = ['name','email','password' ];
    
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
