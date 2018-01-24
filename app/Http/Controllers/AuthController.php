<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use function Sodium\compare;
use Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function aksi_login(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'username' => 'required|min:6|max:15',
//            'password' => 'required|min:8|max:16'
//        ]);
//
//        if ($validator->fails()) {
//            return $validator->errors()->all();
//        }

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
//        $validator = Validator::make($request->all(), [
//            'email' => 'required|email',
//            'username' => 'required|min:6|max:15',
//            'password' => 'required|min:8|max:16'
//        ]);
//
//        if ($validator->fails()) {
//            return $validator->errors()->all();
//        }

        $data = $request;
        return view('pages.auth.register-next', compact('data'));
    }

    public function register_next()
    {
        return view('pages.auth.register-next');
    }
}
