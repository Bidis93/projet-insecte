<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Insectlist;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();

        if ($id == null) {
            return redirect('/home');
        }

        $insects = DB::table('insect_list')
            ->join('users', 'insect_list.insect_id', '=', 'users.id')
            ->where('list_id', '=', $id)
            ->get();

        $loggedInsect = DB::table('users')->where('id', $id)->get();

        return view('home', compact('insects', 'loggedInsect', 'id'));

    }
}
