<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CommunityController extends Controller
{
    public function index(): View
    {
        // Demo data for presentation
        $yourCommunities = collect([
            (object)[
                'name' => 'Newbie Artists',
                'members_count' => 24000,
                'is_following' => true
            ],
            (object)[
                'name' => 'Art Club',
                'members_count' => 24000,
                'is_following' => true
            ]
        ]);

        $categories = [
            'Arts and Culture', 'Technology', 'Health and wellbeing', 
            'Motivation', 'Hobbies', 'Games', 'Passion', 'Religion',
            'Dancing', 'Writing', 'Nature', 'Fashion', 'Travel'
        ];

        $exploreCommunities = collect([
            (object)[
                'name' => 'Standout group',
                'members_count' => 24000,
                'is_following' => false
            ],
            (object)[
                'name' => 'Youtubers hub',
                'members_count' => 24000,
                'is_following' => false
            ]
        ]);

        return view('pages.communities.index', compact('yourCommunities', 'categories', 'exploreCommunities'));
    }

    public function create(): View
    {
        return view('community.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $community = Community::create($validated);

        return redirect()->route('community.show', $community)->with('status', 'Community created successfully!');
    }

    public function show(Community $community): View
    {
        return view('community.show', compact('community'));
    }

    public function edit(Community $community): View
    {
        return view('community.edit', compact('community'));
    }

    public function update(Request $request, Community $community): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $community->update($validated);

        return redirect()->route('community.show', $community)->with('status', 'Community updated successfully!');
    }

    public function destroy(Community $community): RedirectResponse
    {
        $community->delete();

        return redirect()->route('community.index')->with('status', 'Community deleted successfully!');
    }
}
