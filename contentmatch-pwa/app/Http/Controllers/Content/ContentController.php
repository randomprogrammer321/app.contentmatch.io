<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ContentController extends Controller
{
    public function index(): View
    {
        $contents = Content::with('user')->latest()->paginate(15);
        return view('content.index', compact('contents'));
    }

    public function create(): View
    {
        return view('content.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $content = auth()->user()->contents()->create($validated);

        return redirect()->route('content.show', $content)->with('status', 'Content created successfully!');
    }

    public function show(Content $content): View
    {
        return view('content.show', compact('content'));
    }

    public function edit(Content $content): View
    {
        $this->authorize('update', $content);
        return view('content.edit', compact('content'));
    }

    public function update(Request $request, Content $content): RedirectResponse
    {
        $this->authorize('update', $content);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $content->update($validated);

        return redirect()->route('content.show', $content)->with('status', 'Content updated successfully!');
    }

    public function destroy(Content $content): RedirectResponse
    {
        $this->authorize('delete', $content);

        $content->delete();

        return redirect()->route('content.index')->with('status', 'Content deleted successfully!');
    }
}
