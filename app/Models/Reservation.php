<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected $casts = [
    //     'res_date' => 'datetime:Y-m-d h:i:s',
    // ];
}
