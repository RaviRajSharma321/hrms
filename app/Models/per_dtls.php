<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class per_dtls extends Model
{
    use HasFactory;
    protected $emps = "per_dtls";
    protected $primarykey = "dep_id";
}
