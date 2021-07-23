<?php

use Illuminate\Support\Facades\Route;

    // function to find an image
    if (!function_exists('getImage')) {
        function getImage($post, $thumb = false)
        {   
            $url = "storage/photos/{$post->user->id}";
            if($thumb) $url .= '/thumbs';
            return asset("{$url}/{$post->image}");
        }

    // We add an helper in order to get the active road & to put the right class
    if (!function_exists('currentRoute')) {
        function currentRoute($route)
        {
            return Route::currentRouteNamed($route) ? ' class=current' : '';
        }
    }

    // parse correctly the dates
    if (!function_exists('formatDate')) {
        function formatDate($date)
        {
            return ucfirst(utf8_encode ($date->formatLocalized('%d %B %Y')));
        }
      }

}