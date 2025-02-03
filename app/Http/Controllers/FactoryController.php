<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;
class FactoryController extends Controller
{

    public function index()
    {
        $factories = Factory::all();
        return view('factories.index', compact('factories'));
    }

    public function create()
    {
        return view('factories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string',
        ]);

        Factory::create($validatedData);
        return redirect()->route('factories.index');
    }

    public function show($id)
    {
        $factory = Factory::findOrFail($id);
        return view('factories.show', compact('factory'));
    }

    public function edit($id)
    {
        $factory = Factory::findOrFail($id);
        return view('factories.edit', compact('factory'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string',
        ]);

        $factory = Factory::findOrFail($id);
        $factory->update($validatedData);

        return redirect()->route('factories.index');
    }

    public function destroy($id)
    {
        $factory = Factory::findOrFail($id);
        $factory->delete();

        return redirect()->route('factories.index');
    }

}