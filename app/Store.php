<?php

namespace App;


use System\Database\ORM\Model;

class Store extends Model
{


    protected $table = "Store";
    protected $fillable = ['product_id', 'user_id', 'firstCount'];

    public function user(){
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }

    public function product(){
        return $this->belongsTo('\App\Product', 'product_id', 'id');
    }

}