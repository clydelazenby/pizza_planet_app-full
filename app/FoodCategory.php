<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodCategory extends Model
{

    protected $table = 'food_categories';
    public function food_items(){
        return $this->hadMany('App\FoodItem', 'category_id');
    }
}
