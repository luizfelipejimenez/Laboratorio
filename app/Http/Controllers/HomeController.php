<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        return view('index', ['posts' => Post::limit(4)->get()]);
    }

    public function token(Request $request, $user_id){
        $user = User::find($user_id);
        $urlWithQueryString = $request->fullUrl();

        dd($urlWithQueryString);
        //$user->token = $request->
    }
}
