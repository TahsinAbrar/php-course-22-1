<?php

namespace MyBlog\Helpers;

class UtilHelper
{
    public static function public_path(string $path)
    {
        return 'public/';
    }

    public static function root_asset_path(string $path)
    {
        return 'public' . self::asset_path($path);
    }

    public static function asset_path(string $path)
    {
        return '/assets/' . $path;
    }

    public static function storage_path(string $path)
    {
        return 'assets/' . $path;
    }
}