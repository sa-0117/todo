<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function store(Request $request)
  {
    $todo = $request->only(['content']);
    Todo::create($todo);
    
    return redirect('/');

  }
}
