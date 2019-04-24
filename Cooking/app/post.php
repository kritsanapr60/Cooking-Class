<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class post extends Model
{
    // protected $table = 'post';
    protected $fillable = ['title','body','image','equipment','garnish','category'];

    // Comment
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }


}
