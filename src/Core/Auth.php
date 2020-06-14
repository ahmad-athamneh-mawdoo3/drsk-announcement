<?php
namespace Mawdoo3\Drsk\Core;


class Auth  
{
    public static function isAuthed($user = null)
    {
        return isset($user) && !is_null($user) ? "$user logged in core" : 'not logged in core';
    }
}
