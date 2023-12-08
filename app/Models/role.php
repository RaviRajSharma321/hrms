<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function users()
    {
        return $this->belongsToMany(signup::class,'user_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(permissions::class,'roles_permissions');
    }
}
