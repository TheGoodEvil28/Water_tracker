<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return view(
            'posts.index',
            [
                'categories' => Category::whereHas('posts', function ($query) {
                    $query->published();
                })->take(10)->get(),
            ]
        );
    }

    public function show(Post $post)
    {
        return view(
            'posts.show',
            [
                'post' => $post,
            ]
        );
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts,slug',
            'body' => 'required|string',
            'published_at' => 'nullable|date',
            'featured' => 'boolean',
        ]);

        // Assign the authenticated user ID
        $validated['user_id'] = auth()->id();

        // Create the post
        Post::create($validated);

        // Redirect to a success page
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function update(Request $request, Post $post)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:posts,slug,' . $post->id,
            'body' => 'required|string',
            'published_at' => 'nullable|date',
            'featured' => 'boolean',
        ]);

        // Update the post
        $post->update($validated);

        // Redirect to a success page
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        // Soft-delete the post
        $post->delete();

        // Redirect to a success page
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
