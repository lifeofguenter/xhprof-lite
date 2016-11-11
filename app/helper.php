<?php

/**
 * get envvar
 *
 * @param string $key
 * @param mixed $default
 * @return string
 */
function env($key, $default = null)
{
    if (($env = getenv($key)) !== false) {
        return $env;
    } elseif (isset($_SERVER[$key])) {
        return $_SERVER[$key];
    } else {
        return $default;
    }
}
