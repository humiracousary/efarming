<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    // protected $table='protucts';
    protected $guarded=[];


    public function categoryName()
    {
        return $this->belongsTo(Category::class);
    }
}
