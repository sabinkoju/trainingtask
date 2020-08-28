@extends('Frontend/app')

@section('bg-img',asset('Frontend/img/home-bg.jpg'))
@section('title','Warm Welcome')
@section('subtitle','The Best Place for News in the Best Place on Earth')

@section('main-content')
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($news as $new)
            <div class="post-preview">
                <img src="{{asset('Backend/NewsImages/'.$new->image)}}"alt="News image">
                <br>
                <h2 class="post-title">
                {{$new->title}}
                </h2>
                <p class="post-meta">Posted by
                    <a href="#">{{$new->author}}</a>
                    on {{$new->created_at->diffForHumans()}}</p>
                <p class="post-subtitle">
                {{$new->description}}
                </p>
            </div>
            <hr>
            @endforeach

            <!-- Pager -->
            <div class="d-flex justify-content-center">
                {{$news->links()}}
            </div>
        </div>
    </div>
  </div>
  <hr>
@endsection
