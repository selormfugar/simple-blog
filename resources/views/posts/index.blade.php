<!-- resources/views/posts/index.blade.php -->
@extends('layout')

@section('content')
<h1>Blog Posts</h1>

<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>

@if(count($posts) > 0)
<ul class="list-group">
    @foreach($posts as $post)
    <li class="list-group-item">
        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
    </li>
    @endforeach
</ul>
@else
<p>No posts available.</p>
@endif
@endsection