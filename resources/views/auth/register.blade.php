@extends('layouts.layout')

@section('content')

  <!-- Hero section-->
  <section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
        <div class="row pt-md-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
                <h1 class="text-light"><span class='fw-light'><strong>إنشاء حساب جديد</strong></h1>
                <div class="py-4 py-sm-5"><a class="btn btn-primary btn-lg" href="{{ route('login') }}">تسجيل الدخول</a></div>
            </div>
        </div>
    </div>
  </section>
  <!-- Demos section-->
  <section class="container pt-5 pb-3 pb-lg-5" id="tasks">
    <div class="text-center pt-md-4 pb-2">
      <h2>إنشاء حساب جديد</h2>
      <!-- <p class="text-muted">Explore the collection of carefully built homepages. More to come soon!</p> -->
    </div>
    <div class="row pt-4">
      <!-- Forms validation: status tooltips -->
      <form class="needs-validation" action="{{ route('register') }}" method="post" novalidate>
        @csrf
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip01" class="form-label">الاسم الأول</label>
            <input class="form-control" type="text" id="validationTooltip01" placeholder="أحمد محمد صالح" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            <div class="invalid-tooltip">الرجاء كتابة إسمك بشكل صحيح</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltipUsername" class="form-label">بريدك الإلكتروني</label>
            <input class="form-control" type="email" id="validationTooltipUsername" placeholder="yourname@gmail.com" name="email" value="{{ old('email') }}" required autocomplete="email">
            <div class="invalid-tooltip">الرجاء كتابة بريدك الإلكتروني بشكل صحيح</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="gender" class="form-label">الجنس</label>
            <select class="form-select" name="gender" required id="gender">
              <option disabled selected></option>
              <option value="male">ذكر</option>
              <option value="female">أنثى</option>
            </select>
            <div class="invalid-tooltip">الرجاء إختيار الجنسية</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="nationality" class="form-label">الجنسية</label>
            <select class="form-select" name="nationality" required id="nationality">
              <option disabled selected></option>
              @foreach($countries as $row)
                <option value="{{ $row->code }}">{{ $row->name }}</option>
              @endforeach
            </select>
            <div class="invalid-tooltip">الرجاء إختيار الجنسية</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="datepicker" class="form-label">سنة الميلاد</label>
            <input class="form-control" type="text" id="datepicker" name="birthday" required>
            <div class="invalid-tooltip">الرجاء إختيار سنة الميلاد</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationTooltip01" class="form-label">كلمة المرور</label>
            <input class="form-control" type="password" id="validationTooltip01" placeholder="* * * * * *" name="password" required autocomplete="new-password">
            <div class="invalid-tooltip">الرجاء كتابة كلمة المرور بشكل صحيح</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltipUsername" class="form-label">تأكيد كلمة المرور</label>
            <input class="form-control" type="password" id="validationTooltipUsername" placeholder="* * * * * *" name="password_confirmation" required autocomplete="new-password">
            <div class="invalid-tooltip">الرجاء كتابة كلمة المرور بشكل صحيح</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">إنشاء الحساب</button>
      </form>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
    $("#datepicker").datepicker( {
        format: " yyyy", // Notice the Extra space at the beginning
        viewMode: "years", 
        minViewMode: "years"
    });
  </script>
@endsection
