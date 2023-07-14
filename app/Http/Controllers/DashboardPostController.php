<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::all()
            // 'posts' => Post::where ('user_id', auth()->user()->id)->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'gender' => 'required|max:255',
            'nip' => 'required|max:255',
            'email' => 'required|max:255',
            'telp' => 'required|max:255',
            'expertise' => 'required|max:255',
            'laststudy' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'teachinghistory' => 'required|max:255',
            'research' => 'required|max:255',
            'communityservice' => 'required|max:255',
            'category_id' => '',
            'title' => 'max:255',
            'excerpt' => 'max:255',
            'body' => 'max:255',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Post::create($validatedData);
        return redirect('/dashboard/posts')->with('success', 'New Dosen Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255',
            'gender' => 'required|max:255',
            'nip' => 'required|max:255',
            'email' => 'required|max:255',
            'telp' => 'required|max:255',
            'expertise' => 'required|max:255',
            'laststudy' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'teachinghistory' => 'required|max:255',
            'research' => 'required|max:255',
            'communityservice' => 'required|max:255',
            'category_id' => '',
            'title' => 'max:255',
            'excerpt' => 'max:255',
            'body' => 'max:255',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;

        Post::where('id', $post->id)->update($validatedData);
        return redirect('/dashboard/posts')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', ' Data has been deleted!');
    }
}
