<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $guarded = [];

    public function portfolio(){
        return $this->belongsTo(portfolio::class);
    }
}
