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
        <form action="{{ route('activity.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="text-input" class="form-label">العنوان</label>
                <input class="form-control" name="title" type="text" id="text-input" placeholder="اليوم الأول">
            </div>
            <div class="mb-3">
                <label for="textarea-input" class="form-label">المحتوى</label>
                <textarea class="form-control" name="content" id="textarea-input" rows="5" placeholder="قراءة سورة الفاتحة"></textarea>
            </div>
            <div class="mb-3">
                <label for="text-input" class="form-label">فيديو (يوتيوب فقط)</label>
                <input class="form-control" name="youtube" type="text" id="text-input" placeholder="4JoDu1WbXtw">
            </div>
            <div class="mb-3">
                <label for="select-input" class="form-label">إختر اليوم</label>
                <input class="form-control" name="date" type="date" id="text-input" placeholder="4JoDu1WbXtw">
            </div>
            <!-- Status -->
            <div class="mb-3">
                <label for="select-input" class="form-label">الحالة</label>
                <select class="form-select" name="status" id="select-input">
                    <option value="1">تفعيل - عرض</option>
                    <option value="0">إيقاف - إخفاء</option>
                </select>
            </div>
             <!-- Status -->
             <div class="mb-3">
                <label for="select-input" class="form-label">رفع ملف صوتي</label>
                <input class="form-control" name="audioFile" type="file" id="text-input" accept="audio/mp3"/>>
            </div>
            <button type="submit" class="btn btn-primary">إنشاء</button>
        </form>
    </div>
  </section>
   
@endsection
   
    