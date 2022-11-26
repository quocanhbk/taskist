<?php

return [
    "GET" => [
        "/" => "HomeController@index",
        "/register" => "AuthController@indexRegister",
        "/login" => "AuthController@indexLogin",
    ],
    "POST" => [
        "/register" => "AuthController@register",
        "/login" => "AuthController@login",
        "/logout" => "AuthController@logout",
    ],
];
