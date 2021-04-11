@extends('layouts.layout')

@section('content')

  <!-- Hero section-->
  <section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
      <div class="row pt-md-5 justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
          <h1 class="text-light"><span class='fw-light'><strong>إنشاء متحوى جديد</strong></h1>
          <div class="py-4 py-sm-5"><a class="btn btn-primary btn-lg" href="{{ route('activity.index') }}" data-scroll>عرض الكل</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Demos section-->
  <section class="container pt-5 pb-3 pb-lg-5" id="demos">
    <div class="table-responsive">
        <form action="{{ route('activity.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="activity_id" value="{{ $activity->id }}">
            <div class="mb-3">
                <label for="text-input" class="form-label">العنوان</label>
                <input class="form-control" name="title" type="text" id="text-input" placeholder="اليوم الأول" value="{{ $activity->title }}">
            </div>
            <div class="mb-3">
                <label for="textarea-input" class="form-label">المحتوى</label>
                <textarea class="form-control" name="content" id="textarea-input" rows="5" placeholder="قراءة سورة الفاتحة">{{ $activity->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="text-input" class="form-label">فيديو (يوتيوب فقط)</label>
                <input class="form-control" name="youtube" type="text" id="text-input" placeholder="4JoDu1WbXtw" value="{{ $activity->youtube }}">
            </div>
            <div class="mb-3">
                <label for="text-input" class="form-label">أكتب اليوم</label>
                <input class="form-control" name="day" type="text" id="text-input" value="{{ $activity->day }}">
            </div>
            <div class="mb-3">
                <label for="select-input" class="form-label">إختر اليوم</label>
                <input class="form-control" name="date" type="date" id="text-input" value="{{ $activity->date }}">
            </div>
            <!-- Status -->
            <div class="mb-3">
                <label for="select-input" class="form-label">الحالة</label>
                <select class="form-select" name="status" id="select-input">
                    <option value="1" @if($activity->status == 1) selected @endif>تفعيل - عرض</option>
                    <option value="0" @if($activity->status == 0) selected @endif>إيقاف - إخفاء</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="select-input" class="form-label">رفع ملف صوتي</label>
                <input class="form-control" name="audioFile" type="file" id="text-input" accept="audio/mp3"/>
            </div>
            @if($activity->audioFile != null)
              <audio controls>
                <source src="/{{ $activity->audioFile }}" type="audio/mpeg">
              </audio>
            @endif

            @if($activity->youtube != null)
              <iframe 
                width="200" 
                height="560" 
                src="https://www.youtube.com/embed/{{$activity->youtube}}" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
              </iframe>
            @endif
          <button type="submit" class="btn btn-primary">إنشاء</button>
        </form>
    </div>
  </section>
   
@endsection
   
    