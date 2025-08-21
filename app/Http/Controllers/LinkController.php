<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{

        public function index()
        {
            $links = Link::with('category')->latest()->paginate(10);
            return view('backend.link.index', compact('links'));
        }

        public function create()
        {
            $categories = Category::all();
            return view('backend.link.create', compact('categories'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'category_id' => 'required|exists:categories,id',
                'title' => 'required|string|max:255',
                'url' => 'required|url|unique:links,url',
            ]);

            Link::create($request->all());

            return redirect()->route('link.index')->with('success', 'Link created successfully.');
        }

        public function edit(Link $link)
        {
            $categories = Category::all();
            return view('backend.link.edit', compact('link', 'categories'));
        }

        public function update(Request $request, Link $link)
        {
            $request->validate([
                'category_id' => 'required|exists:categories,id',
                'title' => 'required|string|max:255',
                'url' => 'required|url|unique:links,url,' . $link->id,
            ]);

            $link->update($request->all());

            return redirect()->route('link.index')->with('success', 'Link updated successfully.');
        }

        public function destroy(Link $link)
        {
            $link->delete();
            return redirect()->route('link.index')->with('success', 'Link deleted successfully.');
        }
    }


