<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }



    public function AddContact(Request $request)
    {
        return view('admin.contact.create');
    }

    public function StoreContact(Request $request)
    {
        $validasi = $request->validate(
            [
                'address' => 'required|unique:contacts|min:4',
                'email' => 'required|unique:contacts|min:4',
                'phone' => 'required|unique:contacts|min:4',
            ],
        );
        Contact::insert([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('admin.contact')->with('success', 'Contact Berhasil ditambahkan');
    }


    public function AdminMessage()
    {
        $messages = Message::orderBy('id', 'desc')->get();
        return view('admin.contact.message', compact('messages'));
    }

    public function delMessage($id)
    {
        Message::find($id)->delete();

        return redirect()->back()->with('success', 'Message Berhasil dihapus');
    }
}
