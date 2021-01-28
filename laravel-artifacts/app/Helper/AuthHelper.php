<?php


namespace App\Helper;


use Illuminate\Support\Facades\Auth;

class AuthHelper
{

    public static function showUsername()
    {
        $user = Auth::user();
        $name = "";
        if (!empty($user->first_name)) {
            $name .= $user->first_name . " ";
        }
        if (!empty($user->last_name)) {
            $name .= $user->last_name;
        }
        return $name;
    }

}
