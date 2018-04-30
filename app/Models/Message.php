<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'conversation_id', 'from_user_id', 'to_user_id', 'content'
    ];
    protected $table = 'messages';

    public function user()
   {
       return $this->belongsTo('App\Models\User');
   }
}
