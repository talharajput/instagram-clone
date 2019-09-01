<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];  

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/4x6o2zX8FQfkh3HMkqCX9o9qLRmQYg2FzDlBvc7Q.png';
        return '/storage/'. $imagePath;
    }


    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    public function user(){

        return $this->belongsTo(User::class);
    }
}
