@extends('layouts.layout')

@section('content')

  <!-- Hero section-->
  <section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
        <div class="row pt-md-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
                <h1 class="text-light"><span class='fw-light'><strong>قائمة الأوراد</strong></h1>
                <div class="py-4 py-sm-5"><a class="btn btn-primary btn-lg" id="tasks" data-scroll>عرض الأوراد</a></div>
            </div>
        </div>
    </div>
  </section>
  <!-- Demos section-->
  <section class="container pt-5 pb-3 pb-lg-5" id="tasks">
    <div class="text-center pt-md-4 pb-2">
      <h2><span class='fw-light'>مرحباً</span> {{ Auth::user()->name }}</h2>
      <!-- <p class="text-muted">Explore the collection of carefully built homepages. More to come soon!</p> -->
    </div>
    <div class="row pt-4">
  <p><?php echo "Server Time " . date("Y-m-d h:i:s"); ?> (GMT) UTC +0 UK/London</p>
      @forelse($activities as $activity)
      
        <div class="col-sm-2 mb-4">
          <div class="card product-card-alt">
            <div class="product-thumb border">
              @if($activity->date < now()->subDays(1)->toDateTimeString())
                <span class="badge bg-danger badge-shadow">غير منجز</span>
              @endif
              @if($activity->date > today())
                <span class="badge bg-info badge-shadow">متبقي</span>
              @endif
              @if($activity->activity != null)
                @if($activity->activity->status == 1 && $activity->activity->user_id == Auth::user()->id)
                  <span class="badge bg-success badge-shadow">تم الإنجاز</span>
                @endif
              @endif
                @if($activity->date < today())
                  <div class="product-card-actions">
                    <a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="{{route('activity.view', $activity->id)}}"><i class="ci-eye"></i></a>
                  </div>
                  <a class="product-thumb-overlay" href="{{route('activity.view', $activity->id)}}"></a>
                @endif
              <img src="{{ asset('assets/frontend/img/days-card.png') }}" alt="Fashion Store v.1">
            </div>
            <div class="card-body text-center">
              <h3 class="product-title fs-lg pt-2">
              <a @if($activity->date < today()) href="{{route('activity.view', $activity->id)}}" @endif>اليوم {{ date('d', strtotime($activity->date)) }} من شهر {{ date('m', strtotime($activity->date)) }}</a></h3>
              <p>{{ $activity->title }}</p>
            </div>
          </div>
        </div>
      @empty

      @endforelse
      
  </section>
   
@endsection
   
    