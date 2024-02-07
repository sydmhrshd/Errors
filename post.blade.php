@extends('template')

@section('content')
    <!-- Featured blog post-->
    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted"></div>
            <h2 class="card-title">{{$post->title}}</h2>
            <p class="card-text">{{$post->body}}</p>
        </div>
    </div>
@endsection
