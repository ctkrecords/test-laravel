<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/lhq51k0vz1q3KC5DxHS68xlYpi9FrVY0MASFFfnl.jpeg';
        return '/storage/' . $imagePath;
        
    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
