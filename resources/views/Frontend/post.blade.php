@extends('Frontend/app')
@section('bg-img',asset('Frontend/img/post-bg.jpg'))
@section('title','All Posts')
@section('subtitle','Keep Updating Yourself')

@section('main-content')
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-md-10 mx-auto">
            @foreach($post as $posts)
                <div class="post-preview">
                    <img src="{{asset('Backend/postImages/'.$posts->image)}}"alt="Post image">
                    <br>
                    <h2 class="post-title">
                    {{$posts->title}}
                    </h2>
                    <p class="post-meta">Posted by
                    <a href="#">{{$posts->author}}</a>
                    on {{$posts->created_at->diffForHumans()}}</p>
                    <p class="post-subtitle">
                    {{$posts->description}}
                    </p>
                </div>
            <hr>
            @endforeach

            <!-- Pager -->
            <div class="d-flex justify-content-center">
                    {{$post->links()}}
            </div>
        </div>
      </div>
    </div>
</article>
<hr>
@endsection
