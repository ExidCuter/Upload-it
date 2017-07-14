@extends('layouts.app')
@section('content')

    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="">
                <h3>{{$post->title}}</h3>
                <video style="width: 100%;" controls autoplay>
                  <source src="/storage/uploads/{{$post->address}}" type="video/webm">
                Your browser does not support the video tag.
            </video><br>
                <small>{{$post->address}} was Posted on {{$post->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No posts found!</p>
    @endif
@endsection
