<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ["id"];

    public function books() : BelongsToMany
    {
        return $this->belongsToMany(Book::class, BookTag::class);
    }
}
