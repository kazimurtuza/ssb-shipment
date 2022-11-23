<?php

namespace App\Helpers;


class CommonHelper
{
    public static function getUploadPath($path)
    {
        return public_path('uploads/'.$path).'/';
    }
}