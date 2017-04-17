<?php

//use Illuminate\Http\Request;


/**
 * Check if URI matches current page path.
 *
 * @param $path
 * @param string $class
 * @return string
 */
function checkActive($path, $class = 'is-active')
{
    return Request::is($path . '*') ? $class : '';
}