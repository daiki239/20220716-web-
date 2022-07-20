<?php
namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use App\Http\Requests\todoRequest;

class todoController extends Controller

{
    public function index(Request $request)
    {
        return view('index', ['txt' => 'TOdo List']);
    }
    public function post(ClientRequest $request)
    {
        return view('index', ['txt' => '正しい入力です']);
    }

    public function createPage()
    {
        return view('todo_create');
    }
    public function create(Request $request)
    { $form = $request->all();
        todo::create($form);
        return redirect('/');
    }

}

