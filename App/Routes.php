<?php

return [
    "GET" => [
        "/" => "HomeController@index",
        "/register" => "AuthController@indexRegister",
        "/login" => "AuthController@indexLogin",
        "/app" => "AppController@index",
        "/features" => "FeaturesController@index",
        "/pricing" => "PricingController@index",
        "/profile" => "ProfileController@index",
    ],
    "POST" => [
        "/register" => "AuthController@register",
        "/login" => "AuthController@login",
        "/logout" => "AuthController@logout",
        "/profile/avatar" => "ProfileController@updateAvatar",
        "/api/task" => "TaskController@createTaskApi",
        "/api/task/:id/complete" => "TaskController@completeTaskApi",
        "/api/task/:id/uncomplete" => "TaskController@uncompleteTaskApi",
    ],
];