<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Inertia\Inertia;

class TodoController extends Controller
{

    public function index()
    {
        return Inertia::render('Todos/Index', [
            'todos' => Todo::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required'
            ]
        );

        Todo::create(
            [
                'title' => $request->title
            ]
        );
        return redirect()->route('todos.index');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect()->route('todos.index');
    }
}
