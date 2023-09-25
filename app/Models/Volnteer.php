<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volnteer extends Model
{
    use HasFactory;
    public function detail()
    {
        $this->hasMany(Volnteerdetail::class, 'volunteer_id', 'id');
        
    }
    public function item()
    {
        $this->hasMany(Volnteeritem::class, 'volunteer_id', 'id');
        
    }
    protected $fillable = [
        'id',
        'volunteer_name',
        'category_id',
        'description',
        'price',
        'price',
        'main_picture',
    ];

}
