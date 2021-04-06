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
        <form action="{{ route('activity.store') }}" method="post">
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
                <!-- <select class="form-select" name="day" id="select-input">
                    <option>برجاء إختيار عنصر</option>
                    <option value="1">اليوم 1</option>
                    <option value="2">اليوم 2</option>
                    <option value="3">اليوم 3</option>
                    <option value="4">اليوم 4</option>
                    <option value="5">اليوم 5</option>
                    <option value="6">اليوم 6</option>
                    <option value="7">اليوم 7</option>
                    <option value="8">اليوم 8</option>
                    <option value="9">اليوم 9</option>
                    <option value="10">اليوم 10</option>

                    <option value="11">اليوم 11</option>
                    <option value="12">اليوم 12</option>
                    <option value="13">اليوم 13</option>
                    <option value="14">اليوم 14</option>
                    <option value="15">اليوم 15</option>
                    <option value="16">اليوم 16</option>
                    <option value="17">اليوم 17</option>
                    <option value="18">اليوم 18</option>
                    <option value="19">اليوم 19</option>
                    <option value="20">اليوم 20</option>

                    <option value="21">اليوم 21</option>
                    <option value="22">اليوم 22</option>
                    <option value="23">اليوم 23</option>
                    <option value="24">اليوم 24</option>
                    <option value="25">اليوم 25</option>
                    <option value="26">اليوم 26</option>
                    <option value="27">اليوم 27</option>
                    <option value="28">اليوم 28</option>
                    <option value="29">اليوم 29</option>
                    <option value="30">اليوم 30</option>
                </select> -->
            </div>
            <!-- Status -->
            <div class="mb-3">
                <label for="select-input" class="form-label">Select</label>
                <select class="form-select" name="status" id="select-input">
                    <option value="1">تفعيل - عرض</option>
                    <option value="0">إيقاف - إخفاء</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">إنشاء</button>
        </form>
    </div>
  </section>
   
@endsection
   
    