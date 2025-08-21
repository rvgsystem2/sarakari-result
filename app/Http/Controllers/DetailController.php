<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $details = Detail::latest()->paginate(10);
        return view('backend.detail.index', compact('details'));
    }


    public function create()
    {
        return view('backend.detail.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'post_date'   => 'required|date',
            'post_time'   => 'nullable',
            'description' => 'required|string',
        ]);

        Detail::create($request->all());

        return redirect()->route('detail.index')
                         ->with('success', 'Recruitment detail added successfully.');
    }

    public function edit(Detail $detail)
    {
        return view('backend.detail.edit', compact('detail'));
    }

    public function update(Request $request, Detail $detail)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'post_date'   => 'required|date',
            'post_time'   => 'nullable',
            'description' => 'required|string',
        ]);

        $detail->update($request->all());

        return redirect()->route('detail.index')
                         ->with('success', 'Recruitment detail updated successfully.');
    }


    public function destroy(Detail $detail)
    {
        $detail->delete();

        return redirect()->route('detail.index')
                         ->with('success', 'Recruitment detail deleted successfully.');
    }
}
