<?php

namespace App\Http\Controllers;

use App\Models\Requirement;
use Illuminate\Http\Request;

class RequirementController extends Controller
{

        public function index()
        {
            $requirements = Requirement::latest()->paginate(10);
            return view('backend.requirement.index', compact('requirements'));
        }

        public function create()
        {
            return view('backend.requirement.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'post_name' => 'required|string|max:255',
                'eligibility' => 'required|string',
            ]);

            Requirement::create($request->all());

            return redirect()->route('requirement.index')->with('success', 'Requirement created successfully.');
        }

        public function edit(Requirement $requirement)
        {
            return view('backend.requirement.edit', compact('requirement'));
        }

        public function update(Request $request, Requirement $requirement)
        {
            $request->validate([
                'post_name' => 'required|string|max:255',
                'eligibility' => 'required|string',
            ]);

            $requirement->update($request->all());

            return redirect()->route('requirement.index')->with('success', 'Requirement updated successfully.');
        }

        public function destroy(Requirement $requirement)
        {
            $requirement->delete();
            return redirect()->route('requirement.index')->with('success', 'Requirement deleted successfully.');
        }

    }
