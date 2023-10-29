<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
//    protected $fillable = ['title', 'excerpt', 'body', 'price', 'extra', 'URL', 'materials', 'nation', 'category_id', 'slug'];
    protected $guarded = ['id'];
    protected $with = ['category', 'user'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(Shop::class);
    }

    public function scopeFilter($query)
    {
        if (request('search')){
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%')
                ->orWhere('excerpt', 'like', '%' . request('search') . '%');
        };
    }
}
