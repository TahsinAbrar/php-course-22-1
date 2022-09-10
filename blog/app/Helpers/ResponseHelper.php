<?php

namespace MyBlog\Helpers;

class ResponseHelper
{
    public static function renderView($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }

        ob_start();

        include_once view_path() . DIRECTORY_SEPARATOR . "$view.view.php";
        $content = ob_get_clean();
        include_once view_path() . 'layouts.view.php';
    }
}
