<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){
        return view('menus',[
            "title" => "Menus",
            "menus" => Menu::latest()->get()
        ]);
    }

    public function show(Menu $menu){
        return view('menu',[
            "title" => "Menu",
            "menu" => $menu
        ]);
    }
}
