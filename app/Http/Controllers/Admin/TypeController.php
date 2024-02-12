<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all(); // Assicurati che il modello Type sia importato correttamente con use App\Models\Type;
        return view('indextype', compact('types'));
    }
    public function create()
    {
        return view('createtech');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Type::create($validatedData);
        return redirect()->route('admin.types.index');
    }

    public function edit(Type $type)
    {
        return view('edittech', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $type->update($validatedData);
        return redirect()->route('admin.types.index');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('admin.types.index');
    }
}
