@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <div class="text-gray-500">
        <span class="font-bold italic text-gray-800">Author:</span> {{ $post->author_name }}
    </div>

    <div class="text-gray-500">
        <span class="font-bold italic text-gray-800">Published:</span> {{ $post->published_at ? $post->published_at->format('jS M Y') : 'Not published yet' }}
    </div>

    <div class="text-gray-500">
        <span class="font-bold italic text-gray-800">Category:</span> {{ $post->category }}
    </div>

    <div class="text-gray-500">
        <span class="font-bold italic text-gray-800">Tags:</span> {{ $post->tags ?: 'None' }}
    </div>

    <div class="text-gray-500">
        <span class="font-bold italic text-gray-800">Views:</span> {{ $post->views }}
    </div>

    <div class="text-gray-500">
        <span class="font-bold italic text-gray-800">Comments:</span> {{ $post->comments_count }}
    </div>

    <div class="text-gray-500">
        <span class="font-bold italic text-gray-800">Likes:</span> {{ $post->likes_count }}
    </div>

    <div class="pt-8">
        <img src="{{ asset('images/' . $post->image_path) }}" alt="Post Image" class="w-full">
    </div>

    <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </div>

    <div class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->content }}
    </div>
</div>

@endsection
