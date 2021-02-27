<?php

use Jenssegers\Blade\Blade;

if (!function_exists('view')) {
    function view($view, $data = [])
    {
        $path = APPPATH . 'views';
        $blade = new Blade($path, $path . '/cache');

        echo $blade->make($view, $data);
    }
}

if (!function_exists('asset')) {
    function asset($path)
    {
        return base_url() . DIRECTORY_SEPARATOR .  'assets' . DIRECTORY_SEPARATOR . $path;
    }
}
