<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    use HasFactory;
    protected $table = 'tags';
    protected $guarded = [];

    public function portfolio(){
        return $this->belongsToMany(portfolio::class,'portfolio_tags','tags_id');
     }
    // public function portfolio(){
    //     return $this->belongsToMany(portfolio::class,'portfolio_tags')->withPivot([
    //      'tags_id'
    //     ]);
    //  }
}
