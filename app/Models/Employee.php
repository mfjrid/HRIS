<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'gender',
        'birth',
        'phone',
        'photo',
        'team_id',
        'role_id',
        'is_verified',
        'verified_at',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }
}
