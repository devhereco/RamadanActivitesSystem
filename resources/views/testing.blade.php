@extends('layouts.layout')

@section('content')
    <style>
        .counter {
            text-align: center;
            background-color: lightgrey;
        }
    </style>
  <!-- Hero section-->
  <section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
        <div class="row pt-md-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3 my-3">
                <h1 class="text-light"><span class='fw-light'><strong>شاشة الإحصائيات</strong></h1>
                <div class="py-4 py-sm-5"><a class="btn btn-primary btn-lg" href="{{ route('home') }}">عرض الأوراد</a></div>
            </div>
        </div>
    </div>
  </section>
  <!-- Demos section-->
  <section class="container pt-5 pb-3 pt-md-5" id="tasks">
    <div class="row quran-book">
        
        <p class="custom-quran-start">
            بسم الله الرحمن الرحين
        </p>
        <p class="custom-quran">
            الْحَمْدُ لِلَّهِ رَبِّ الْعَالَمِينَ ﴿2﴾ الرَّحْمَٰنِ الرَّحِيمِ ﴿3﴾ مَالِكِ يَوْمِ الدِّينِ ﴿4﴾ إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ ﴿5﴾ اهْدِنَا الصِّرَاطَ الْمُسْتَقِيمَ ﴿6﴾ صِرَاطَ الَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوبِ عَلَيْهِمْ وَلَا الضَّالِّينَ ﴿7﴾
        </p>
            
  
    </div>
  </section>
   
@endsection
   
    