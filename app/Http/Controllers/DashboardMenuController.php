<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.menus.index',[
            'menus' => Menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menus.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:menus',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required'
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('menu-images');
        }

        $validateData['pendek'] = Str::limit(Strip_tags($request->desc), 200);

        Menu::Create($validateData);

        return redirect('/dashboard/menus')->with('success','New menu has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view('dashboard.menus.show',[
            'menu' => $menu
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('dashboard.menus.edit',[
            'menu' => $menu,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $rules =[
            'title' => 'required|max:255',
            'category_id' => 'required',
            'desc' => 'required'
        ];

        

        if($request->slug != $menu->slug){
            $rules['slug'] = 'required|unique:menus';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('menu-images');
        }

        $validateData['pendek'] = Str::limit(Strip_tags($request->desc), 200);

        Menu::where('id', $menu->id)
            ->update($validateData);

        return redirect('/dashboard/menus')->with('success','New menu has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        if($menu->image){
            Storage::delete($menu->image);
        }
        Menu::Destroy($menu->id);

        return redirect('/dashboard/menus')->with('success','New menu has been deleted!');
    }
}
