<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class srepair extends Model
{
    use HasFactory;
    protected $table = 'srepair' ;
    protected $primaryKey = 'id'   ;
    protected $fillable = [
        'nickname_c',
        'phonenumber_c',
        'devices_c',
        'problem_c',
        'status_t',
        'time_receive_t',
        'time_return_t',
        'nickname_t',
        'phonenumber_t',
        'advice_t',
    ];
}
