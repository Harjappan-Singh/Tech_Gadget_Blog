<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TechPost;
use Cviebrock\EloquentSluggable\Services\SlugService;

class TechPostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = TechPost::orderBy('updated_at', 'DESC')->get();
        return view('techBlog.index', compact('posts'));
    }

    public function create()
    {
        return view('techBlog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $newImageName = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        $post = new TechPost();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->category = $request->input('category');
        $post->tags = $request->input('tags');
        $post->slug = SlugService::createSlug(TechPost::class, 'slug', $request->title);
        $post->image_path = $newImageName;
        $post->user_id = auth()->user()->id;
        $post->author_name = auth()->user()->name;
        $post->save();

        return redirect('/tech-blog')->with('message', 'Your post has been added!');
    }

    // public function show($slug)
    // {
    //     $post = TechPost::where('slug', $slug)->firstOrFail();
    //     return view('techBlog.show', compact('post'));
    // }

    public function show($slug)
    {
        return view('techBlog.show')
            ->with('post', TechPost::where('slug', $slug)->first());
    }
    public function edit($slug)
    {
        $post = TechPost::where('slug', $slug)->firstOrFail();
        return view('techBlog.edit', compact('post'));
    }

    public function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);

        $post = TechPost::where('slug', $slug)->firstOrFail();
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->content = $request->input('content');
        $post->category = $request->input('category');
        $post->tags = $request->input('tags');
        $post->slug = SlugService::createSlug(TechPost::class, 'slug', $request->title);
        $post->user_id = auth()->user()->id;
        $post->author_name = auth()->user()->name;
        $post->save();

        return redirect('/tech-blog')->with('message', 'Your post has been updated!');
    }

    public function destroy($slug)
    {
        $post = TechPost::where('slug', $slug)->firstOrFail();
        $post->delete();

        return redirect('/tech-blog')->with('message', 'Your post has been deleted!');
    }
}