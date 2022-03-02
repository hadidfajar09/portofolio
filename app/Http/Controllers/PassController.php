<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class PassController extends Controller
{
    public function ChangePass()
    {
        return view('layouts.partial.changepassword');
    }

    public function UpdatePassword(Request $request)
    {
        $validate = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashpass = Auth::user()->password;
        if (Hash::check($request->old_password, $hashpass)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('login')->with('success', 'Password Change Suksesss');
        } else {
            return redirect()->back()->with('error', 'Current Password Salah');
        }
    }

    public function EditProfile()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            if ($user) {
                return view('layouts.partial.updateprofile', compact('user'));
            }
        }
    }

    public function UpdateProfile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        if ($user) {
            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->save();
            return redirect()->back()->with('error', 'Profile Berhasil diUpdate');
        } else {
            return redirect()->back();
        }
    }
}
