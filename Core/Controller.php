<?php

namespace Core;

abstract class Controller
{
    public function redirect($url)
    {
        header("Location: " . $url);
        exit();
    }
}
