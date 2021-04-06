@extends('layouts.layout')

@section('content')

  <!-- Hero section-->
  <section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
        <div class="row pt-md-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
                <h1 class="text-light"><span class='fw-light'><strong>قائمة المهام</strong></h1>
                <form action="{{ route('activity.save.progress') }}" method="post">
                  @csrf
                  <input type="hidden" name="activity_id" value="{{ $activity->id }}">
                  <div class="py-4 py-sm-5">
                    <a class="btn btn-primary btn-lg" href="{{ route('home') }}">عرض المهام</a>
                    @if($activity->activity != null)
                      @if($activity->activity->status == 1 && $activity->activity->user_id == Auth::user()->id)
                        <a readonly class="btn btn-success btn-lg">تم الإنجاز</a>
                      @else
                        @if($activity->date > today()->subDays(1)->toDateTimeString())
                          <button type="submit" class="btn btn-warning btn-lg">سجل إنجازي</button>
                        @endif
                      @endif
                    @else
                      @if($activity->date > today()->subDays(1)->toDateTimeString())
                        <button type="submit" class="btn btn-warning btn-lg">سجل إنجازي</button>
                      @endif
                    @endif
                  </div>
                </form>
            </div>
        </div>
    </div>
  </section>
  <!-- Demos section-->
  <section class="container pt-5 pb-3 pb-lg-5" id="tasks">
    <div class="text-center pt-md-4 pb-2">
      <h2>{{ $activity->title }}</h2>
      <p class="text-muted">{{ $activity->content }}</p>
    </div>
    
    @if($activity->youtube != null)
    <iframe 
      width="560" 
      height="560" 
      src="https://www.youtube.com/embed/{{$activity->youtube}}" 
      title="YouTube video player" 
      frameborder="0" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
    @endif
  </section>
   
@endsection
   
    