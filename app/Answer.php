<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'user_name', 'content', 'posted_date', 'rating', 'question_id'
    ];

    public function question()
    {
        return $this->belongsTo('App\Question');
    }

    public function ratings()
    {
        return $this->hasMnay('App\Rating');
    }
}
