<?php

namespace App\Http\Controllers\Admin\Blogger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogtagController extends Controller
{
    public function Blogtagindex()
    {
        $blogtags = Blogtags::all();
        return view('admin.blogtags.index', compact('blogtags'));
    }

    public function Blogtagcreate()
    {
        return view('admin.blogtags.create');
    }

    public function Blogtagstore(Request $request)
    {
        $validated = $request->validate([
            'tags' => 'required|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['tags']);

        Blogtags::create($validated);

        return redirect()->route('blogtag.index')->with('success', 'Blog tag created successfully');
    }

    public function Blogtagedit($id)
    {
        $blogtag = Blogtags::findOrFail($id);
        return view('admin.blogtags.edit', compact('blogtag'));
    }

    public function Blogtagupdate(Request $request, $id)
    {
        $validated = $request->validate([
            'tags' => 'required|string|max:255',
        ]);

        $validated['slug'] = Str::slug($validated['tags']);

        $blogtag = Blogtags::findOrFail($id);
        $blogtag->update($validated);

        return redirect()->route('blogtag.index')->with('success', 'Blog tag updated successfully');
    }

    public function Blogtagshow($id)
    {
        $blogtag = Blogtags::findOrFail($id);
        return view('admin.blogtags.show', compact('blogtag'));
    }

    public function Blogtagdestroy($id)
    {
        $blogtag = Blogtags::findOrFail($id);
        $blogtag->delete();
        return redirect()->route('blogtag.index')->with('success', 'Blog tag deleted successfully');
    }
}
