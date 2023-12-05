<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Library extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ["id"];

    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }

    public function books() : HasManyThrough
    {
        return $this->hasManyThrough(Book::class, User::class);
    }
}
