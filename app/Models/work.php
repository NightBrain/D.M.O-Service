<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class work extends Model
{
    use HasFactory;
    protected $table = 'work';
    protected $primarykey = 'id';
    protected $fillable = [
        'imagework',
        'imageadmin',
        'title',
    ];
}
