<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit() {
        return view('user.edit');
    }

    public function save(Request $request)
    {
        $user = Auth::user();

        if ($request->oldPass != "") {
            if (!Hash::check($request->oldPass, $user->password))
            return back()->withInput()->withErrors(['oldPass' =>
            ['La contraseña original no coincide.']]);
            else if (
                $request->newPass == ""
                || $request->newPass != $request->newPass2
            )
            return back()->withInput()->withErrors(['newPass' =>
            ['Las nuevas contraseñas están vacías o no coinciden.']]);
            else
            $user->password = Hash::make($request->newPass);
        }
        $user->name = $request->name;
        $user->save();
        return back()->with(['success' =>
        ['Los datos han sido modificados.']]);
    }
}
