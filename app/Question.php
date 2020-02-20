<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'contact_email', 'contact_name', 'content', 'product_id', 'posted_date', 'status', 'storefront_id', 'product_name', 'product_sku'
    ];

    public function storefront()
    {
        return $this->belongsTo('App\Storefront');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
    
}
