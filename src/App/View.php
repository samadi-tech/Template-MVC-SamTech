<?php

namespace SamtechSkripsi\App;

class View
{

    public static function view(String $view, $model)
    {
        require __DIR__ . "/../View/Template/Home/header.php";
        require __DIR__ . "/../View/" . $view . ".php";
        require __DIR__ . "/../View/Template/Home/footer.php";
    }
}
