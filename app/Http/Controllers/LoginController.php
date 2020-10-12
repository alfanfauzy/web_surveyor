<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->session()->has('role')) {
            $role = $request->session()->get('role');

            switch ($role) {
                case 1:
                    return redirect('admin');
                    break;
                case 2:
                    return redirect('surveyor');
                    break;
                case 3:
                    return redirect('pengunjung');
                    break;

                default:
                    return redirect('/');
                    break;
            }
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $getRole = $request->role;
        switch ($getRole) {
            case 1:
                $request->session()->put('role', $getRole);
                return redirect('admin');
                break;
            case 2:
                $request->session()->put('role', $getRole);
                return redirect('surveyor');
                break;
            case 3:
                $request->session()->put('role', $getRole);
                return redirect('pengunjung');
                break;

            default:
                return redirect('/');
                break;
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('role');
        return redirect('/');
    }
}
