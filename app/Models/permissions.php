<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissions extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function roles()
    {
        return $this->belongsToMany(role::class.'roles_permissions');
    }
}
