<?php

namespace App\Models;

use App\Traits\HasMatricule;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory, HasUlids, HasMatricule;

    protected $guarded = ["id"];

}
