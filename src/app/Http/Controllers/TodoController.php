<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //todo一覧labelsと関連付けさせて取得
        $todos = Todo::all();
        return response()->json($todos, 200, [], JSON_UNESCAPED_UNICODE)
    ->header('Content-Type', 'application/json; charset=utf-8');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $todo = Todo::create($request->all());
        return response()->json([
            // 'todo' => $todo
            $todo, 201, [], JSON_UNESCAPED_UNICODE
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //completedの値を更新
        $todo = Todo::find($id);
        $todo->completed = $request->completed;
        $todo->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //todoを削除
        $todo = Todo::find($id);
        $todo->delete();
    }
}
