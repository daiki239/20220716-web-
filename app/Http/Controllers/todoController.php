<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;

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
    {
        $todo = new Todo();
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description;
        $todo->assign_person_name = $request->assign_person_name;
        $todo->estimate_hour = $request->estimate_hour;
        $todo->save();

        return redirect('/');
    }

}