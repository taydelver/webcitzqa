<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'rating_value', 'answer_id',
    ];

    public function answer()
    {
        return $this->belongsTo('App\Answer');
    }
}
