<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCredentials extends Model implements AuthenticatableContract
{
    use HasFactory, HasUuids, Authenticatable;

    protected $table = 'UserCredentials';
    protected $primaryKey = 'credentialsId';
    protected $fillable = [
        'username',
        'email',
        'password',
        'isActive'
    ];
    protected $hidden = [
        'password'
    ];
    protected $casts = [
        'password' => 'hashed'
    ];
}
