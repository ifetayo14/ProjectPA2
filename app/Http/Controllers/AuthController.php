<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Session;
use DB;

class AuthController extends Controller
{
    public function login(Request $request){
        $data = DB::table('user')->where('username', $request->username)->where('password', $request->password)->first();

        if ($data) {
            if ($data->role=="administrator") {
                $request->session()->put('username', $data->username);
                $request->session()->put('role', $data->role);

                return redirect('/indexAdministrator');
            }
            elseif ($data->role=="personaliaTornagodang") {
                $request->session()->put('username', $data->username);
                $request->session()->put('role', $data->role);

                return redirect('/personaliaTornagodang');
            }
            elseif ($data->role=="personaliaPardomuan") {
                $request->session()->put('username', $data->username);
                $request->session()->put('role', $data->role);

                return redirect('/personaliaPardomuan');
            }
            elseif ($data->role=="personaliaSibosur") {
                $request->session()->put('username', $data->username);
                $request->session()->put('role', $data->role);

                return redirect('/personaliaSibosur');
            }
            elseif ($data->role=="personaliaMatio") {
                $request->session()->put('username', $data->username);
                $request->session()->put('role', $data->role);

                return redirect('/personaliaMatio');
            }
        }
        return redirect('/index')->with('error', 'Username atau Password Anda Salah');
    }

    public function logout(){
        Session::flush();

        return redirect('/');
    }
}
