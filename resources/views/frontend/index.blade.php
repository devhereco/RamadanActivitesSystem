@extends('layouts.layout')

@section('content')
  @php 
    $index = 1;
  @endphp
  <!-- Hero section-->
  <section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
        <div class="row pt-md-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3 my-3">
                <h1 class="text-light py-4 py-sm-5"><span class='fw-light'><strong>قائمة الأوراد</strong></h1>
            </div>
        </div>
    </div>
  </section>
  <section class="container pt-5 pb-3 pb-lg-5" id="tasks">
    <div class="text-center pt-md-4 pb-2">
      <h2><span class='fw-light'>مرحباً</span> {{ Auth::user()->name }}</h2>
    </div>
    <div class="row pt-4">
    {{-- <p><?php echo "Server Time " . date("Y-m-d h:i:s"); ?> (GMT) UTC +0 UK/London</p> --}}
      @forelse($activities as $activity)
        <div class="col-sm-2 mb-3">
          <a @if($activity->date < today()) href="{{route('activity.view', $activity->id)}}" @endif>
            @if($activity->activity != null)
              @if($activity->activity->status == 1 && $activity->activity->user_id == Auth::user()->id)
                @if($activity->activity->created_at < $activity->date)
                  <div class="card text-warning bg-faded-warning border-warning">
                @elseif($activity->activity->user_id == Auth::user()->id)
                  <div class="card text-success bg-faded-success border-success">
                @endif
              @else
                <div class="card text-danger bg-faded-danger border-danger">
              @endif
            @elseif($activity->date < now()->subDays(1)->toDateTimeString())
              <div class="card text-danger bg-faded-danger border-danger">
            @elseif($activity->date > today())
              <div class="card text-dark bg-faded-dark border-dark">
            @else
              <div class="card text-info bg-faded-info border-info">
            @endif
              <div class="card-body">
                <p class="card-text fs-sm custom-days">اليوم {{ date('d', strtotime($activity->date)) }}</p>
              </div>
            </div>
          </a>
        </div>
      @empty

      @endforelse
    </div>
  </section>
@endsection
   
    