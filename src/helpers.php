<?php

declare(strict_types=1);

if (!function_exists('say')) {
    /**
     * Simple function
     *
     * @param string|null $message
     */
    function say(?string $message)
    {
        echo $message;
    }
}
