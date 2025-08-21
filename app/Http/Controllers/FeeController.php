<?php

namespace App\Http\Controllers;

use App\Models\Fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{

    public function index()
    {
        $fees = Fee::latest()->paginate(10);
        return view('backend.fee.index', compact('fees'));
    }

    public function create()
    {
        return view('backend.fee.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'group' => 'required|string',
            'category' => 'required|string',
            'amount' => 'required|numeric',
            'payment_modes' => 'nullable|string',
        ]);

        Fee::create($request->all());
        return redirect()->route('fee.index')->with('success', 'Fee added successfully.');
    }

    public function edit(Fee $fee)
    {
        return view('backend.fee.edit', compact('fee'));
    }

    public function update(Request $request, Fee $fee)
    {
        $request->validate([
            'group' => 'required|string',
            'category' => 'required|string',
            'amount' => 'required|numeric',
            'payment_modes' => 'nullable|string',
        ]);

        $fee->update($request->all());
        return redirect()->route('fee.index')->with('success', 'Fee updated successfully.');
    }

    public function destroy(Fee $fee)
    {
        $fee->delete();
        return redirect()->route('fee.index')->with('success', 'Fee deleted successfully.');
    }

}
