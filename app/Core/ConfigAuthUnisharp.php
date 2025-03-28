<?php


namespace App\Core;


class ConfigAuthUnisharp
{
    public function userField()
    {
        return \Auth::guard('admins')->user()->id;
    }
}