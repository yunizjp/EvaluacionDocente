<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index')->with('users',$users);
    }

    public function import(){
        return view('user.import');
    }

     public function importdata(Request $request)
    {
        Excel::import(new UserImport, request()->file('documento'));
        return redirect('/user');
    }
}
