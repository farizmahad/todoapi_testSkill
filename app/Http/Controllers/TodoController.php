<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //
    public function index(){
        $todo=Todo::all();

        $data=['todo'=>$todo];

        return $data;
    }

    public function create(Request $request){
        $todo=new Todo();
        $todo->todo=$request->nameTodo;
        $todo->status='Undone';
        $todo->save();

        //return "Todo Telah Ditambah";
        return redirect('/todo');
    }

    public function ubah(Request $request, $id){
        $todo=Todo::find($id);
        $todo->todo=$request->nameTodo;
        $todo->save();

        //return "Todo Done";
        return redirect('/todo');
    }

    public function update_done(Request $request, $id){
        $todo=Todo::find($id);
        $todo->status='Done';
        $todo->save();

        //return "Todo Done";
        return redirect('/todo');
    }

    public function update_undone(Request $request, $id){
        $todo=Todo::find($id);
        $todo->status='Undone';
        $todo->save();

        //return "Todo Done";
        return redirect('/todo');
    }

    public function delete($id){
        $todo=Todo::find($id);
        $todo->delete();

        //return "Todo Dihapus";
        return redirect('/todo');
    }
    
    public function detail($id){
        $todo=Todo::find($id);

        return $todo;
    }
}
