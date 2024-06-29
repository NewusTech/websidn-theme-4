<?php

namespace App\Http\Controllers\Admin\Blogger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogkategoriController extends Controller
{
    public function Blogkategoriindex()
    {
        $blogkategoris = Blogkategoris::all();
        return view('admin.blogkategoris.index', compact('blogkategoris'));
    }

    public function Blogkategoricreate()
    {
        return view('admin.blogkategoris.create');
    }

    public function Blogkategoristore(Request $request)
    {
        $validated = $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['kategori']);

        Blogkategoris::create($validated);

        return redirect()->route('blogkategori.index')->with('success', 'Blog kategori created successfully');
    }

    public function Blogkategoriedit($id)
    {
        $blogkategori = Blogkategoris::findOrFail($id);
        return view('admin.blogkategoris.edit', compact('blogkategori'));
    }

    public function Blogkategoriupdate(Request $request, $id)
    {
        $validated = $request->validate([
            'kategori' => 'required|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['kategori']);

        $blogkategori = Blogkategoris::findOrFail($id);
        $blogkategori->update($validated);

        return redirect()->route('blogkategori.index')->with('success', 'Blog kategori updated successfully');
    }

    public function Blogkategorishow($id)
    {
        $blogkategori = Blogkategoris::findOrFail($id);
        return view('admin.blogkategoris.show', compact('blogkategori'));
    }

    public function Blogkategoridestroy($id)
    {
        $blogkategori = Blogkategoris::findOrFail($id);
        $blogkategori->delete();
        return redirect()->route('blogkategori.index')->with('success', 'Blog kategori deleted successfully');
    }
}
