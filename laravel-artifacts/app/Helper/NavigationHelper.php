<?php


namespace App\Helper;


use Illuminate\Support\Facades\Auth;
use stdClass;

class NavigationHelper
{
    public static function getNavigation(): array
    {
        $user = Auth::user();
        $roles = [];
        if (!empty($user->role)) {
            $roles = $user->role;
        }
        $navigations = [];
        array_push($navigations, self::getNavMenu("dashboard", "uim-airplay", "dashboard"));
        return $navigations;
    }

    private static function getNavMenu($name, $icon, $url): stdClass
    {
        $nav = new stdClass;
        $nav->name = __("navigation." . $name);
        $nav->url = $url;
        $nav->icon = $icon;
        return $nav;
    }
}
