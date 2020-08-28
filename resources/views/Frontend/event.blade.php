@extends('Frontend/app')
@section('bg-img',asset('Frontend/img/event.jpg'))
@section('title','All Events')
@section('subtitle','Lets Start Our Journey')

@section('main-content')
<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        @foreach($events as $event)
        <div class="post-preview">
          <a href="#">
            <h2 class="post-title">
              {{$event->title}}
            </h2>
          </a>
            <h3 class="post-subtitle">
               Start Date:{{$event->start_date}}
            </h3>
            <h3 class="post-subtitle">
              End Date:{{$event->end_date}}
            </h3>

          <p class="post-meta">Organized by
            <a href="#"> {{$event->author}}</a>
            on  {{$event->created_at->diffForHumans()}}</p>
        </div>
        <hr>
        @endforeach
        <!-- Pager -->
        <div class="d-flex justify-content-center">
                {{$events->links()}}
        </div>
        {{-- @endforeach --}}
        </div>
      </div>
    </div>
  </article>

  <hr>
@endsection
