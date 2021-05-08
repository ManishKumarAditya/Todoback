<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }
    public function store(Request $request)
    
    {
        Todo::create([
            'todolist'=>$request->todolist

        ]);
        return "data inserted";
    }

    public function destroy(Request $request,$id){
        Todo::find($id)->delete();
        return "data deleted sucessfully";
    }
   
}
