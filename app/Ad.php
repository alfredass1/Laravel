<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'description', 'price', 'email', 'phone', 'location', 'img', 'catid', 'userID'];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function users()
    {
        return $this->belongsTo(User::class);
    }


}