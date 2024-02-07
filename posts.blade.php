@extends('template')

@section('title','پست ها')

@section('sidebar_top')
    @parent
    <!-- Side widget-->
    <div class="card mb-4">
        <div class="card-header">Side Custom Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
    </div>
@endsection
@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
    @endif

    <table class="table table-hover table-bordered table-striped">
    <thead>
    <tr>
        <th>شناسه</th>
        <th>عنوان</th>
        <th>اسلاگ</th>
        <th>متن</th>
    </tr>
    </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->body}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
