<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index(){
        $name = 'Kalleby';
        $habits = ['correr', 'estudar', 'jogar', 'dormir'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);

    }
}
