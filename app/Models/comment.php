<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $table = 'comment';
    protected $primarykey = 'id';
    protected $fillable = [
        'imageuser',
        'nickname_c',
        'comment',
        'imagereview',
    ];
}
