<?php
namespace App\Http\Controllers;
use App\Models\Menu;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)

    {
        if (Menu::where('nama_menu', $request->nama_menu)->exists()) {
            return redirect()->back()->with('error', 'Menu dengan nama tersebut sudah ada.');
        }

        Menu::create($request->all());
        return redirect()->route('menus.index')->with('success','Data Berhasil Ditambah');
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit',compact('menu'));
    }

    public function update(Menu $menu,Request $request){
        $menu->update($request->all());
        return redirect()->route('menus.index')->with('success','Data Berhasil Diupdate');
    }

    public function destroy(Menu $menu ){
        $menu->delete();
        return redirect()->route('menus.index')-with('success','Data Berhasil Dihapus');
    }

}
