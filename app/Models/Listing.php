<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Listing
{
    public static function all()
    {
        $files = File::files(resource_path("listings"));
        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        base_path();
        if (! file_exists($path = resource_path("listings/{$slug}.html"))){
            throw new ModelNotFoundException();
        }

        return cache()->remember("{slug}",1200,fn() => file_get_contents($path));
    }
}
