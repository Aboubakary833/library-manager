<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, HasUlids, Notifiable;

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
    ];

    protected $guarded = ["library_id"];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function library() : BelongsTo
    {
        return $this->belongsTo(Library::class);
    }

    public function books() : HasMany
    {
        return $this->hasMany(Book::class);
    }

    public function members() : HasMany
    {
        return $this->hasMany(Member::class);
    }

    public function subscriptions() : HasMany
    {
        return $this->hasMany(Subscription::class);
    }

    public function sales() : HasMany
    {
        return $this->hasMany(Sale::class);
    }
}
