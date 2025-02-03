<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabinet;

class CabinetController extends Controller
{
    public function index()
    {
        $cabinates = Cabinet::all();
        return view('cabinates.index', compact('cabinates'));
    }

    public function create()
    {
        return view('cabinates.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Cabinet::create($validatedData);
        return redirect()->route('cabinates.index');
    }

    public function show($id)
    {
        $cabinate = Cabinet::findOrFail($id);
        return view('cabinates.show', compact('cabinate'));
    }

    public function edit($id)
    {
        $cabinate = Cabinet::findOrFail($id);
        return view('cabinates.edit', compact('cabinate'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $cabinate = Cabinet::findOrFail($id);
        $cabinate->update($validatedData);

        return redirect()->route('cabinates.index');
    }

    public function destroy($id)
    {
        $cabinate = Cabinet::findOrFail($id);
        $cabinate->delete();

        return redirect()->route('cabinates.index');
    }
}