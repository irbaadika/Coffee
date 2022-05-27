<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(){

        $menus = Menu::latest();

        if(request('search')){
            $menus->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('desc', 'like', '%' . request('search') . '%');
        }

        return view('menus',[
            "title" => "Menus",
            "menus" => $menus->get()
        ]);
    }

    public function show(Menu $menu){
        return view('menu',[
            "title" => "Menu",
            "menu" => $menu
        ]);
    }
}
