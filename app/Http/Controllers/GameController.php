<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GameController extends Controller
{
    public function index()
    {
        $data=Http::get('https://jsonplaceholder.typicode.com/users');
        $data=$data->json();
        return view('game.index',compact('data'));
    }
}
