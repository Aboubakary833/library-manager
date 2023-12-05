<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ["id", "user_id"];

    public function author() : BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function type() : BelongsTo
    {
        return $this->belongsTo(BookType::class);
    }

    public function tags() : BelongsToMany
    {
        return $this->belongsToMany(Tag::class, BookTag::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function publisher() : BelongsTo
    {
        return $this->belongsTo(Publisher::class);
    }
}
