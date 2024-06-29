<?php

namespace App\Http\Controllers\Admin\Blogger;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blogs::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'meta' => 'nullable|string|max:255',
            'tag' => 'nullable|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);

        Blogs::create($validated);

        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'meta' => 'nullable|string|max:255',
            'tag' => 'nullable|string|max:255',
            'keyword' => 'nullable|string|max:255',
            'caption' => 'nullable|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|string|max:255',
        ]);

        $blog = Blogs::findOrFail($id);
        $blog->update($validated);

        return redirect()->route('blog.index');
    }

    public function show($id)
    {
        $blog = Blogs::findOrFail($id);
        return view('admin.blog.view', compact('blog'));
    }

    public function destroy($id)
    {
        $blog = Blogs::findOrFail($id);
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
