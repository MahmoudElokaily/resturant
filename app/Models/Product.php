<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name' ,'price' , 'place' , 'des' , 'deyafa' , 'menWwoman' , 'capacity' , 'category_id' , 'image1' , 'image2' , 'image3' , 'image4' ,'created_at' , 'updated_at'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
