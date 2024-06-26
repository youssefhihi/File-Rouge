<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory,Prunable;
    
    protected $fillable = [
        'name',
    ];

    // public function prunable()
    // {
    //     return static::where('deleted_at', '<=', now()->subMonth());
    // }
    public function books(){
       return $this->hasMany(Book::class,'genre_id');
    }
}
