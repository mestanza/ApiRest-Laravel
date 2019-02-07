<?php

namespace App;
use App\Product;
use App\Buyer;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'quantity',
        'id_buyer',
        'id_product'
    ];

    public function product(){
        $this::belongsTo(Product::class);
    }

    public function buyer(){
        $this::belongsTo(Buyer::class);
    }    
}
