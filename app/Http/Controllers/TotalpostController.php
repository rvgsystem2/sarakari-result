<?php

namespace App\Http\Controllers;

use App\Models\Totalpost;
use Illuminate\Http\Request;

class TotalpostController extends Controller
{

        public function index()
        {
            $totalposts = Totalpost::latest()->paginate(10);
            return view('backend.totalpost.index', compact('totalposts'));
        }

        public function create()
        {
            return view('backend.totalpost.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'min_age' => 'nullable|string|max:255',
                'max_age' => 'nullable|string|max:255',
                'note'    => 'nullable|string',
                'total'   => 'required|integer|min:0',
            ]);

            Totalpost::create($request->all());
            return redirect()->route('totalpost.index')->with('success', 'Post created successfully.');
        }

        public function edit(Totalpost $totalpost)
        {
            return view('backend.totalpost.edit', compact('totalpost'));
        }

        public function update(Request $request, Totalpost $totalpost)
        {
            $request->validate([
                'min_age' => 'nullable|string|max:255',
                'max_age' => 'nullable|string|max:255',
                'note'    => 'nullable|string',
                'total'   => 'required|integer|min:0',
            ]);

            $totalpost->update($request->all());
            return redirect()->route('totalpost.index')->with('success', 'Post updated successfully.');
        }

        public function destroy(Totalpost $totalpost)
        {
            $totalpost->delete();
            return redirect()->route('totalpost.index')->with('success', 'Post deleted successfully.');
        }


}
