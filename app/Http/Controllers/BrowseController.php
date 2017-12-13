<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Insect;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BrowseController extends Controller
{
   public function index() {

   		$insects = User::all();

   		return view('browse', compact('insects'));
   }

   public function add(User $insect) {
   		$insect_id = $insect->id;

      $list_id = Auth::id();

      DB::table('insect_list')
          ->insert(
              ['insect_id' => $insect_id, 'list_id' => $list_id]
      );

      DB::table('insect_list')
          ->insert(
              ['insect_id' => $list_id, 'list_id' => $insect_id]
      );

      return redirect('browseForFriends');
   }


}
