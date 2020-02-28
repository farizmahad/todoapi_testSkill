<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class homeController extends Controller
{
    //
    public function index(){
		$todo=Todo::all();

        $data=['todo'=>$todo];
        
		return view('todo', ['todo'=> $todo]);
    }
    
    public function update_open($id){
        $todo=Todo::find($id);

        $data=['todo'=>$todo];
        
        return view('update', ['todo'=> $todo]);
    }

}
