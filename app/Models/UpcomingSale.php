<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcomingSale extends Model
{
    use HasFactory;

    protected $fillable=[
        'role',
        'login_status',
        'name',
        'email',
        'mobile',
        'address',
        'city',
        'state',
        'locality',
        'price',
        'area',
        'description',
        'image',
    ];
}
