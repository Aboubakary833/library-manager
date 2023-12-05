<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = ["id", "user_id"];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function member() : BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
    
}
