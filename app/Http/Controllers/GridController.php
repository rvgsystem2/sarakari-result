<?php

namespace App\Http\Controllers;

use App\Models\Grid;
use Illuminate\Http\Request;

class GridController extends Controller
{

    /**
     * Display a listing of the grids.
     */
    public function index()
    {
        $grids = Grid::latest()->paginate(10);
        return view('backend.grid.index', compact('grids'));
    }

    public function create()
    {
        return view('backend.grid.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',

        ]);

        Grid::create($request->only(['title']));

        return redirect()->route('grid.index')->with('success', 'Grid created successfully.');
    }

    public function edit(Grid $grid)
    {
        return view('backend.grid.edit', compact('grid'));
    }

    public function update(Request $request, Grid $grid)
    {
        $request->validate([
            'title' => 'required|string|max:255',

        ]);

        $grid->update($request->only(['title']));

        return redirect()->route('grid.index')->with('success', 'Grid updated successfully.');
    }
    public function destroy(Grid $grid)
    {
        $grid->delete();

        return redirect()->route('grid.index')
            ->with('success', 'grid deleted successfully.');
    }
}


