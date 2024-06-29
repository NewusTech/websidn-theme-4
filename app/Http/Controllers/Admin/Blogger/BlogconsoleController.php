<?php

namespace App\Http\Controllers\Admin\Blogger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogconsoleController extends Controller
{
    public function index()
    {
        $blogconsoles = Blogconsole::all();
        return view('admin.blogconsoles.index', compact('blogconsoles'));
    }

    public function create()
    {
        return view('admin.blogconsoles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'code' => 'required|string',
        ]);

        Blogconsole::create($validated);

        return redirect()->route('blogconsole.index')->with('success', 'Blog console created successfully');
    }

    public function edit($id)
    {
        $blogconsole = Blogconsole::findOrFail($id);
        return view('admin.blogconsoles.edit', compact('blogconsole'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'code' => 'required|string',
        ]);

        $blogconsole = Blogconsole::findOrFail($id);
        $blogconsole->update($validated);

        return redirect()->route('blogconsole.index')->with('success', 'Blog console updated successfully');
    }

    public function show($id)
    {
        $blogconsole = Blogconsole::findOrFail($id);
        return view('admin.blogconsoles.show', compact('blogconsole'));
    }

    public function destroy($id)
    {
        $blogconsole = Blogconsole::findOrFail($id);
        $blogconsole->delete();
        return redirect()->route('blogconsole.index')->with('success', 'Blog console deleted successfully');
    }
}
