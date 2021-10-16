<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolio';
    protected $guarded = [];

    public function tags(){
       return $this->belongsToMany(tags::class,'portfolio_tags','portfolio_id');
    }
    // public function tags(){
    //    return $this->belongsToMany(tags::class,'portfolio_tags')->withPivot([
    //     'portfolio_id'
    //    ]);
    // }

    public function images(){
        return $this->hasMany(images::class,'portfolio_id');
    }
}
