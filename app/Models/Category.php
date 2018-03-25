<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'user_id', 'title'
    ];
    protected $table = 'categories';

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'category_id', 'id');
    }

    public function user()
   {
       return $this->belongsTo('App\Models\User', 'user_id', 'id');
   }
}
