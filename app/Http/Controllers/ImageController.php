<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multiple;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function allImage()
    {
        $images = Multiple::all();
        return view('multi.index', compact('images'));
    }

    public function addImage(Request $request)
    {


        $image = $request->file('image');

        foreach ($image as $multi) {

            $name_gen = hexdec(uniqid()) . '.' . $multi->getClientOriginalExtension();
            Image::make($multi)->save('image/multi/' . $name_gen);

            $last_img = 'image/multi/' . $name_gen;

            Multiple::insert([
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
        }

        return redirect()->back()->with('success', 'Brand Berhasil ditambahkan');
    }
    
       public function delImage($id)
    {
        $image = Multiple::find($id);
        $old = $image->image;
        unlink($old);
        Multiple::find($id)->delete();


        return redirect()->back()->with('success', 'Image Berhasil dihapus');
    }
}
