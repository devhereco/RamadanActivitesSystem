@extends('layouts.layout')

@section('content')

<!-- Hero section-->
<section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
        <div class="row pt-md-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
                <h1 class="text-light"><span class='fw-light'><strong>تسجل الدخول</strong></h1>
                <div class="py-4 py-sm-5"><a class="btn btn-primary btn-lg" href="{{ route('register') }}">إنشاء حساب جديد</a></div>
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
      <form class="needs-validation" action="{{ route('login') }}" method="post" novalidate>
        @csrf
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip01" class="form-label">بريدك الإلكتروني</label>
            <input class="form-control" type="text" id="validationTooltip01" placeholder="أحمد محمد صالح" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <div class="invalid-tooltip">الرجاء كتابة بريدك الإلكتروني بشكل صحيح</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="validationTooltip01" class="form-label">كلمة المرور</label>
            <input class="form-control" type="password" id="validationTooltip01" placeholder="* * * * * *" name="password" required autocomplete="current-password">
            <div class="invalid-tooltip">الرجاء كتابة كلمة المرور بشكل صحيح</div>
            <div class="valid-tooltip">صحيح!</div>
          </div>
        </div>
        <button class="btn btn-primary" type="submit">تسجيل الدخول</button>
      </form>
    </div>
  </section>

@endsection
