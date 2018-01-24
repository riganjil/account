<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use function Sodium\compare;
use Validator;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function aksi_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:6|max:15',
            'password' => 'required|min:8|max:16'
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
        }

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('account');
        } else {
            return redirect('auth/login');
        }
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function aksi_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'username' => 'required|min:6|max:15',
            'password' => 'required|min:8|max:16',
            'password_confirmation' => 'required|min:8|max:16',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
        }

        $data = $request;
        return view('pages.auth.register-next', compact('data'));
    }

    public function register_next()
    {
        return view('pages.auth.register-next');
    }

    public function aksi_register_next(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'username' => 'required|min:6|max:15',
            'password' => 'required|min:8|max:16',
            'ktp' => 'required|numeric',
            'foto' => 'required|mimes:jpg,jpeg,png|max:100',
            'foto_ktp' => 'required|mimes:jpg,jpeg,png|max:100',
        ]);

        if ($validator->fails()) {
            return $validator->errors()->all();
        }

        $cek = User::where('username', $request->username)->first();
        $cek_email = User::where('email', $request->email)->first();
        if ($cek) {
            return response()->json(['status' => '400', 'error' => true, 'message' => 'Username telah terdaftar'], 200);
        }
        if ($cek_email) {
            return response()->json(['status' => '400', 'error' => true, 'message' => 'Email telah terdaftar'], 200);
        }

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $file->move('upload/foto', $file->getClientOriginalName());
        }

        if($request->hasFile('foto_ktp')){
            $file = $request->file('foto_ktp');
            $file->move('upload/foto_ktp', $file->getClientOriginalName());
        }

        $simpan = new User();
        $simpan->kode_user = User::getNewCode();
        $simpan->email = $request->email;
        $simpan->username = $request->username;
        $simpan->password = Hash::make($request->password);
        $simpan->ktp = Hash::make($request->ktp);
        $simpan->foto = $request->file('foto')->getClientOriginalName();
        $simpan->foto_ktp = $request->file('foto_ktp')->getClientOriginalName();
        $simpan->save();

        return view('pages.auth.register-complete');
    }
}
