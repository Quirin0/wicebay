<?php

namespace App\Controller\Pages;

use \App\View\Classes\View;
class Modelo{

    public static function getModelo($title, $content){
        return View::render('pages/modelo', [
            "title"   => $title,
            "content" => $content
        ]);
    }
}