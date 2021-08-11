<?php

use Laravolt\Avatar\Facade as Avatar;

if(!function_exists('generateAvatar')){
    function generateAvatar(string $name)
    {
        return Avatar::create($name)->toBase64();
    }
}
