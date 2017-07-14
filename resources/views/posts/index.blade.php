@extends('layouts.app')
@section('content')
    <h1>posts</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->address}}">{{$post->title}}</a></h3>
                <p>{{$post->address}}</p>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found!</p>
    @endif
@endsection
