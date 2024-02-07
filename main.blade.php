@extends('template')
./
@section('content')
    <!-- Featured blog post-->
    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted">{{$firstPost->created_ad->diffForHumans()}}</div>
            <h2 class="card-title">{{$firstPost->title}}</h2>
            <p class="card-text">{{$firstPost->body}}</p>
            <a class="btn btn-primary" href="{{route('post-show',[$firstPost->id,$firstPost->slug])}}"> ادامه مطلب ←</a>
        </div>
    </div>
    <!-- Nested row for non-featured blog posts-->
    <div class="row">
        @foreach($otherPost as $post)
            <div class="col-lg-6">
                <!-- Blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{{$post->created_ad->diffForHumans()}}</div>
                        <h2 class="card-title h4">{{$post->title}}</h2>
                        <p class="card-text">{{mb_substr($post->body,0,100)}}...</p>
                        <a class="btn btn-primary" href="{{route('post-show',[$post->id,$post->slug])}}"> ادامه مطلب ←</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Pagination-->
    <nav aria-label="Pagination">
        <hr class="my-0" />
        <ul class="pagination justify-content-center my-4">
            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
            <li class="page-item"><a class="page-link" href="#!">2</a></li>
            <li class="page-item"><a class="page-link" href="#!">3</a></li>
            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
            <li class="page-item"><a class="page-link" href="#!">15</a></li>
            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
        </ul>
    </nav>

@endsection
