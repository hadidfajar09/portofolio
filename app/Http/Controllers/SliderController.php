<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
    public function Slider()
    {
        $sliders = Slider::latest()->get();

        return view('admin.slider.index', compact('sliders'));
    }

    public function AddSlider()
    {
        return view('admin.slider.create');
    }

    public function StoreSlider(Request $request)
    {
        $validasi = $request->validate(
            [
                'title' => 'required|unique:sliders|min:4',
                'image' => 'required|image|mimes:jpeg,jpg,png|unique:sliders|max:5048'
            ],
        );

        $image = $request->file('image');


        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1920, 1080)->save('image/slider/' . $name_gen);

        $last_img = 'image/slider/' . $name_gen;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('home.slider')->with('success', 'Slider Berhasil ditambahkan');
    }

    public function EditSlider($id)
    {
        $sliders = Slider::find($id);

        return view('admin.slider.edit', compact('sliders'));
    }

    public function UpdateSlider(Request $request, $id)
    {
        $validasi = $request->validate(
            [
                'title' => 'required|min:4',
            ]
        );

        $lama = $request->lama;
        $image = $request->file('image');

        if ($image) {

            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(1920, 1080)->save('image/slider/' . $name_gen);

            $last_img = 'image/slider/' . $name_gen;
            @unlink($lama);

            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
            return redirect()->route('home.slider')->with('success', 'Slider Berhasil diupdate');
        } else {

            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now()
            ]);
            return redirect()->route('home.slider')->with('success', 'Slider Berhasil diupdate');
        }
    }

    public function delSlider($id)
    {
        $image = Slider::find($id);
        $old = $image->image;
        unlink($old);
        Slider::find($id)->delete();


        return redirect()->back()->with('success', 'Slider Berhasil dihapus');
    }
}
