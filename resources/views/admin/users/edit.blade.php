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
        <form action="{{ route('activity.update') }}" method="post">
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
                <label for="select-input" class="form-label">إختر اليوم</label>
                <select class="form-select" name="day" id="select-input">
                    <option>برجاء إختيار عنصر</option>
                    <option value="1" @if($activity->day == 1) selected @endif>اليوم 1</option>
                    <option value="2" @if($activity->day == 2) selected @endif>اليوم 2</option>
                    <option value="3" @if($activity->day == 3) selected @endif>اليوم 3</option>
                    <option value="4" @if($activity->day == 4) selected @endif>اليوم 4</option>
                    <option value="5" @if($activity->day == 5) selected @endif>اليوم 5</option>
                    <option value="6" @if($activity->day == 6) selected @endif>اليوم 6</option>
                    <option value="7" @if($activity->day == 7) selected @endif>اليوم 7</option>
                    <option value="8" @if($activity->day == 8) selected @endif>اليوم 8</option>
                    <option value="9" @if($activity->day == 9) selected @endif>اليوم 9</option>
                    <option value="10" @if($activity->day == 10) selected @endif>اليوم 10</option>

                    <option value="11" @if($activity->day == 11) selected @endif>اليوم 11</option>
                    <option value="12" @if($activity->day == 12) selected @endif>اليوم 12</option>
                    <option value="13" @if($activity->day == 13) selected @endif>اليوم 13</option>
                    <option value="14" @if($activity->day == 14) selected @endif>اليوم 14</option>
                    <option value="15" @if($activity->day == 15) selected @endif>اليوم 15</option>
                    <option value="16" @if($activity->day == 16) selected @endif>اليوم 16</option>
                    <option value="17" @if($activity->day == 17) selected @endif>اليوم 17</option>
                    <option value="18" @if($activity->day == 18) selected @endif>اليوم 18</option>
                    <option value="19" @if($activity->day == 19) selected @endif>اليوم 19</option>
                    <option value="20" @if($activity->day == 20) selected @endif>اليوم 20</option>

                    <option value="21" @if($activity->day == 21) selected @endif>اليوم 21</option>
                    <option value="22" @if($activity->day == 22) selected @endif>اليوم 22</option>
                    <option value="23" @if($activity->day == 23) selected @endif>اليوم 23</option>
                    <option value="24" @if($activity->day == 24) selected @endif>اليوم 24</option>
                    <option value="25" @if($activity->day == 25) selected @endif>اليوم 25</option>
                    <option value="26" @if($activity->day == 26) selected @endif>اليوم 26</option>
                    <option value="27" @if($activity->day == 27) selected @endif>اليوم 27</option>
                    <option value="28" @if($activity->day == 28) selected @endif>اليوم 28</option>
                    <option value="29" @if($activity->day == 29) selected @endif>اليوم 29</option>
                    <option value="30" @if($activity->day == 30) selected @endif>اليوم 30</option>
                </select>
            </div>
            <!-- Status -->
            <div class="mb-3">
                <label for="select-input" class="form-label">Select</label>
                <select class="form-select" name="status" id="select-input">
                    <option value="1" @if($activity->status == 1) selected @endif>تفعيل - عرض</option>
                    <option value="0" @if($activity->status == 0) selected @endif>إيقاف - إخفاء</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">إنشاء</button>
        </form>
    </div>
  </section>
   
@endsection
   
    