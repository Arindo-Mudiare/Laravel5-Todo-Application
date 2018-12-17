<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    //Index method
    public function index() {
        $todos = Todo::all();
        return view('todos')->with('todos', $todos);
    }
}
