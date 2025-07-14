<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'user';
    protected $primarykey = 'id';
    protected $fillable = [
        'firstname',
        'lastname',
        'nickname',
        'phonenumber',
        'image',
        'usertype',
        'activate',
        'email',
        'password',
    ];
}
