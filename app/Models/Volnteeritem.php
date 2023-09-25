<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volnteeritem extends Model
{
    use HasFactory;
    protected $fillable = [
        "qty",
        "number",
        "location",
        "user_id",
        "volunteer_id",
    ];
}