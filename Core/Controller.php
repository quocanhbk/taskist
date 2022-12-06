<?php

namespace Core;

abstract class Controller
{
    public function redirect($url)
    {
        header("Location: " . $url);
        exit();
    }

    public function json($data, $status = 200)
    {
        header("Content-Type: application/json");
        http_response_code($status);
        echo json_encode($data);
        exit();
    }
}