<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Listing
{
    public static function find($slug)
    {
        base_path();
        if (! file_exists($path = resource_path("listings/{$slug}.html"))){
            throw new ModelNotFoundException();
        }

        return cache()->remember("{slug}",1200,fn() => file_get_contents($path));
    }
}
