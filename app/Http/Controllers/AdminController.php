<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;
use App\Models\User;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function index()
    {
        
        $coffees = Coffee::all();
        $coffees = isset($coffees) ? $coffees : "0";
        return view('Admin/index', ['coffees' => $coffees]);
    }

    public function ekle()
    {
        $coffees = Coffee::all();

        return view('Admin/ekle', ['coffees' => $coffees]);
    }

    public function kahveekle(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required|numeric',
            'type' => 'required',
            'coffeebean' => 'required',

        ]);
        $photo = $request->file('photo');
        $path = $photo->store('public/photos'); // storage/app/photos klasörüne kaydedilir
        $photopath = str_replace('public/', '', $path);
        $coffee = new Coffee([
            'photo' => $photopath,
            'brand' => $request->input('brand'),
            'model' => $request->input('model'),
            'price' => $request->input('price'),
            'type' => $request->input('type'),
            'coffeebean' => $request->input('coffeebean'),
        ]);
    
        $coffee->save();
        return redirect()->route('admin.ekle')->with('success', 'Ürün başarıyla eklendi.');
    }

    public function kahvesil($id)
    {

        $coffee=Coffee::find($id);
        $photopath = $coffee->photo;
        if (Storage::disk('public')->exists($photopath)) {
            Storage::disk('public')->delete($photopath);
        }
        $coffee->delete();

        return redirect('/admin/ekle');
    }
}
