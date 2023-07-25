<?php

namespace App\Http\Controllers;

use App\Module\ShareData;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    //首頁
    public function indexPage()
    {
        $name = 'home';
        $binding = [
            'title' => ShareData::TITLE,
            'name' => $name,
        ];
        return view('layouts.home', $binding);
    }
}
