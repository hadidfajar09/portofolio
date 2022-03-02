<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Multiple;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function About()
    {
        $abouts = About::latest()->get();

        return view('admin.about.index', compact('abouts'));
    }

    public function AddAbout()
    {
        return view('admin.about.create');
    }

    public function StoreAbout(Request $request)
    {
        $validasi = $request->validate(
            [
                'title' => 'required|unique:abouts|min:4',
                'short_des' => 'required|unique:abouts|min:4',
                'long_des' => 'required|unique:abouts|min:4',
            ]
        );
        About::insert([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('home.about')->with('success', 'About Berhasil ditambahkan');
    }
    public function EditAbout($id)
    {
        $abouts = About::find($id);

        return view('admin.about.edit', compact('abouts'));
    }

    public function UpdateAbout(Request $request, $id)
    {

        About::find($id)->update([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
        ]);

        return redirect()->route('home.about')->with('success', 'About Berhasil diupdate');
    }


    public function delAbout($id)
    {
        About::find($id)->delete();

        return redirect()->back()->with('success', 'About Berhasil dihapus');
    }

    public function Portofolio()
    {
        $porto = Brand::all();
        return view('pages.portofolio', compact('porto'));
    }
    
      public function AboutMe()
    {
        return view('pages.about');
    }

    public function Contact()
    {
        $contacts = DB::table('contacts')->first();
        return view('pages.contact', compact('contacts'));
    }
    
      public function Skills()
    {
        return view('pages.skills');
    }

    public function ContactForm(Request $request)
    {
        $validasi = $request->validate(
            [
                'name' => 'required|unique:messages|min:4',
                'email' => 'required|unique:messages|min:4',
                'subject' => 'required|unique:messages|min:4',
                'message' => 'required|unique:messages|min:4',
            ],
        );
        Message::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('contact')->with('success', 'Message Berhasil terkirim');
    }
}
