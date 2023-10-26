<?php

namespace App\Http\Controllers;

use App\Models\Todo_label;
use Illuminate\Http\Request;

class TodoLabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labels = Todo_label::all();
        return response()->json($labels, 200, [], JSON_UNESCAPED_UNICODE)
    ->header('Content-Type', 'application/json; charset=utf-8');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
