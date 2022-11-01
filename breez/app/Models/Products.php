<?php

namespace App\Models;

use App\Models\orders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'numbers',
        'img',
        'desc',
        'shop_id',
        
    ];


    public function orders(){
        return $this->BelongsToMany(orders::class,'order_products');
    }
}
