<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

        /**
         * Display a listing of the categorys.
         */
        public function index()
        {
            $categorys = Category::latest()->paginate(10);
            return view('backend.category.index', compact('categorys'));
        }

        public function create()
        {
            return view('backend.category.create');
        }

        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',

            ]);



            Category::create($request->only(['name']));

            return redirect()->route('category.index')->with('success', 'category created successfully.');
        }

        public function edit(Category $category)
        {
            return view('backend.category.edit', compact('category'));
        }

        public function update(Request $request, Category $category)
        {
            $request->validate([
                'name' => 'required|string|max:255',

            ]);

            $category->update($request->only(['name']));

            return redirect()->route('category.index')->with('success', 'category updated successfully.');
        }
        public function destroy(Category $category)
        {
            $category->delete();

            return redirect()->route('category.index')
                ->with('success', 'category deleted successfully.');
        }
    }




