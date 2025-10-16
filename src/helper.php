<?php
declare (strict_types = 1);

if (!function_exists('jwt')) {
    function jwt()
    {
        return app('jwt');
    }
}