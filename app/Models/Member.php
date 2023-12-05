<?php

namespace App\Models;

use App\Traits\HasMatricule;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{
    use HasFactory, HasUlids, HasMatricule;

    protected $guarded = ["id", "user_id"];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
