<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function allBrand()
    {
        $brands = Brand::latest()->paginate(5);
        return view('brand.index', compact('brands'));
    }

    public function addBrand(Request $request)
    {
        $validasi = $request->validate(
            [
                'brand_name' => 'required|unique:brands|min:4',
                'brand_image' => 'required|image|mimes:jpeg,jpg,png|unique:brands|max:2048'
            ],
            [
                'brand_name.required' => 'Tolong isi nama Brand',
                'brand_image.required' => 'Upload Image jpg,jpeg,png',
                'brand_image.min' => 'Karakter Terlalu panjang'
            ]
        );

        $brand_image = $request->file('brand_image');

        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($brand_image->getClientOriginalExtension());
        // $img_name = $name_gen . '.' . $img_ext;
        // $up_loc = 'image/brand/';
        // $last_img = $up_loc . $img_name;
        // $brand_image->move($up_loc, $img_name);

        $name_gen = hexdec(uniqid()) . '.' . $brand_image->getClientOriginalExtension();
        Image::make($brand_image)->save('image/brand/' . $name_gen);

        $last_img = 'image/brand/' . $name_gen;

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->back()->with('success', 'Brand Berhasil ditambahkan');
    }


    public function editBrand($id)
    {
        $brands = Brand::find($id);

        return view('brand.edit', compact('brands'));
    }

    public function updateBrand(Request $request, $id)
    {
        $validasi = $request->validate(
            [
                'brand_name' => 'required|min:4',
            ]
        );

        $lama = $request->lama;
        $brand_image = $request->file('brand_image');

        if ($brand_image) {

            $name_gen = hexdec(uniqid()) . '.' . $brand_image->getClientOriginalExtension();
            Image::make($brand_image)->save('image/brand/' . $name_gen);

            $last_img = 'image/brand/' . $name_gen;
            @unlink($lama);

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'brand_image' => $last_img,
                'created_at' => Carbon::now()
            ]);
            return redirect()->back()->with('success', 'Brand Berhasil diupdate');
        } else {

            Brand::find($id)->update([
                'brand_name' => $request->brand_name,
                'created_at' => Carbon::now()
            ]);
            return redirect()->back()->with('success', 'Brand Berhasil diupdate');
        }
    }

    public function delBrand($id)
    {
        $image = Brand::find($id);
        $old = $image->brand_image;
        unlink($old);
        Brand::find($id)->delete();


        return redirect()->back()->with('success', 'Brand Berhasil dihapus');
    }


    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'User Logout');
    }
}
