<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BookTag extends Pivot
{
    use HasUlids;

    private $guarded = ["id"];
}
