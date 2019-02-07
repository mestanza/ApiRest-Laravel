<?php

namespace App;
use App\Category;
use App\Seller;
use App\Transaction;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    const PRODUCTO_DISPONIBLE = '1';
    const PRODUCTO_NO_DISPONIBLE = '0';


    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];
    
    public function disponible(){
        return $this::status == PRODUCTO_DISPONIBLE;
    }

    public function categories(){
        return $this::belongsToMany(Category::class);
    }

    public function seller(){
        return $this::belongsTo(Seller::class);
    }

    public function transactions(){
        return $this::hasMany(Transaction::class);
    }
}

