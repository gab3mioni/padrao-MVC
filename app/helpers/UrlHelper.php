<?php

namespace App\Helpers;

class UrlHelper
{
    public static function base_url(string $path): string
    {
        return 'http://' . $_SERVER['HTTP_HOST'] . '/padrao-MVC/public/' . ltrim($path, '/');
    }
}