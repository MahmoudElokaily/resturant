<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';
    use HasFactory;
    protected $fillable = ['name' , 'number' , 'place' , 'bof' , 'pay' , 'date' , 'created_at' , 'updated_at'];
}
