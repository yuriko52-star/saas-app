<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\CustomerFactory;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    use HasFactory;

    
    protected $fillable = [
        'name',
        'email',
        'postal_code',
        'address'
    ];

     
}
