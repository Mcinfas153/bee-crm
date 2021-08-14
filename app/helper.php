<?php

use Laravolt\Avatar\Facade as Avatar;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

if(!function_exists('generateAvatar')){
    function generateAvatar(string $name)
    {
        return Avatar::create($name)->toBase64();
    }
}

if(!function_exists('storeImage')){
    function storeImage($photo)
    {
        $img = Image::make($photo)->encode('jpg');
        $extension = $photo->extension();
        $fileName = Str::random('10').'.'.$extension;
        Storage::disk('public')->put($fileName,$img);
        return $fileName;
    }
}
