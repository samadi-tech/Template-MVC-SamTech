<?php

namespace SamtechSkripsi\Controller;


use SamtechSkripsi\App\View;

class HomeController
{

    function index()
    {
        // $model = [
        //     "tittle" => "Samtech Skripsi",
        //     "content" => "Halaman index HOME"

        // ];

        // Render::view("Home/index",$model);
        View::view("Home/index", [
            "tittle" => "SamTech | AOL IP",
            "content" => "Halaman index HOME"
        ]);
    }
}
