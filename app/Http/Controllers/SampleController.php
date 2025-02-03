<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sample;

class SampleController extends Controller
{
    public function index()
    {
        $samples = Sample::all();
        return view('samples.index', compact('samples'));
    }

    public function create()
    {
        return view('samples.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Sample::create($validatedData);
        return redirect()->route('samples.index');
    }

    public function show($id)
    {
        $sample = Sample::findOrFail($id);
        return view('samples.show', compact('sample'));
    }

    public function edit($id)
    {
        $sample = Sample::findOrFail($id);
        return view('samples.edit', compact('sample'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $sample = Sample::findOrFail($id);
        $sample->update($validatedData);

        return redirect()->route('samples.index');
    }

    public function destroy($id)
    {
        $sample = Sample::findOrFail($id);
        $sample->delete();

        return redirect()->route('samples.index');
    }
}