<?php

namespace App\Shop\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getFormattedAttribute(){
        return '$'. $this->price;   
    }
}
