<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasPermissionsTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;

class signup extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'username',
        'is_admin',
    ];
    protected $table = "signup";
    protected $primarykey = "id";

    // public function role(){
    //     return $this->hasMany(role::class);
    // }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_roles');
    }

}
