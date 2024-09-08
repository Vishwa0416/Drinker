<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mixers extends Model
{
    use HasFactory;
    protected $table = 'mix';
    protected $fillable = [
        'name', 'image', 'description', 'category'
    ];
}
