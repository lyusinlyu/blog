<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'title', 'content'
    ];
    protected $table = 'posts';

    public function comments()
    {
        return $this->hasMany('App\Models\Post', 'post_id', 'id');
    }
    public function likes()
    {
        return $this->hasMany('App\Models\Post', 'post_id', 'id');
    }

    public function user()
   {
       return $this->belongsTo('App\Models\User', 'user_id', 'id');
   }

    public function category()
   {
       return $this->belongsTo('App\Models\Category');
   }


}
