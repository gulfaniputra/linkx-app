<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{
    public function index()
    {
        $links = Auth::user()->links()->get();

        return view('links.index', [
            'links' => $links,
        ]);
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'link' => 'required|url',
        ]);

        $link = Auth::user()->links()->create($request->only(['name', 'link']));

        if ($link) {
            return redirect()->to('/dashboard/links');
        }

        return redirect()->back();
    }

    public function edit(Link $link)
    {
    }

    public function update(Request $request, Link $link)
    {
    }

    public function destroy(Request $request, Link $link)
    {
    }
}
