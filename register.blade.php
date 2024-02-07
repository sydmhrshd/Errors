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
        <div class="alert alert-{{session('status')}}">
            {{session('msg')}}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title" class="col-form-label">عنوان</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="slug" class="col-form-label">اسلاگ</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}">
        </div>

        <div class="form-group">
            <label for="body" class="col-form-label">متن</label>
            <textarea class="form-control" id="body" name="body">{{old('body')}}</textarea>
        </div>

        <div class="form-group mt-3">
        <button class="btn btn-success">ثبت</button>
        </div>
    </form>
@endsection
