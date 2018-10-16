<?php

namespace App\Shop\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getFormattedAttribute(){
        return '$'. $this->price;   
    }

    public function setNameAttribute(string $name)
    {
        $this->attributes['name'] = strtolower($name);
    }

    public function scopeAvailable($query)
    {
        return $this->where('status', true);
    }
}
