<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Property extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'description',
        'surface',
        'rooms',
        'bedrooms',
        'floor',
        'price',
        'address',
        'sold'
    ];
    public function options() : BelongsToMany {
        return $this->belongsToMany(Option::class);
        
    }
    public function getSlug()  {
        return Str::slug($this->title);
        
    }

}
