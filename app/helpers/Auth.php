<?php
namespace App\Helpers;

class Auth
{
    public static function check(): bool
    {
        session_start();
        return isset($_SESSION['user']);
    }

    public static function user() {
        session_start();
        return $_SESSION['user'];
    }
}