<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class Storefront extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'name', 'api_token',
    ];

    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
