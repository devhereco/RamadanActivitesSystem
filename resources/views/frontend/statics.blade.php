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
      
    <div class="text-center pt-md-4 pb-2">
      <h2><span class='fw-light'>إحصائيات</span> {{ config('app.name', 'المنصة') }}</h2>
      <!-- <p class="text-muted">Explore the collection of carefully built homepages. More to come soon!</p> -->
    </div>
    


    <div class="row pt-4">
        
    <div class="col-sm-4 mb-4">
          <div class="card product-card-alt">
            <div class="card bg-secondary">
                <div class="card-header text-center">
                    <strong>عدد الأوراد المضافة </strong>
                </div>
                <div class="card-body">
                    <h1 class="card-title text-center"><strong>{{ $activities }}</strong><p class="fs-md">عدد الاوراد</p></h1>
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card product-card-alt">
            <div class="card bg-secondary">
                <div class="card-header text-center">
                    <strong>عدد إنجازات المستخدمين</strong>
                </div>
                <div class="card-body">
                    <h1 class="card-title text-center"><strong>{{ $userActivities }}</strong><p class="fs-md">إنجاز مسجل</p></h1>
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card product-card-alt">
            <div class="card bg-secondary">
                <div class="card-header text-center">
                    <strong>عدد منجزين ورد اليوم</strong>
                </div>
                <div class="card-body">
                    <h1 class="card-title text-center"><strong>{{ $todayActivities }}</strong><p class="fs-md">منجز / منجزة للورد</p></h1>
                </div>
            </div>
          </div>
        </div>    
        
        <div class="col-sm-4 mb-4">
          <div class="card product-card-alt">
            <div class="card bg-secondary">
                <div class="card-header text-center">
                    <strong>عدد الستخدمين</strong>
                </div>
                <div class="card-body">
                    <h1 class="card-title text-center"><strong>{{ $users }}</strong><p class="fs-md">مستخدم مستفيد</p></h1>
                </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 mb-4">
          <div class="card product-card-alt">
            <div class="card bg-secondary">
                <div class="card-header text-center">
                    <strong>عدد المستخديمن الإناث </strong>
                </div>
                <div class="card-body">
                    <h1 class="card-title text-center"><strong>{{ $users_female }}</strong><p class="fs-md">مستخدمة</p></h1>
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 mb-4">
          <div class="card product-card-alt">
            <div class="card bg-secondary">
                <div class="card-header text-center">
                    <strong>عدد المستخدمين الذكور</strong>
                </div>
                <div class="card-body">
                    <h1 class="card-title text-center"><strong>{{ $users_male }}</strong><p class="fs-md">مستخدم</p></h1>
                </div>
            </div>
          </div>
        </div>
            
    
    
        {{-- <div class="card text-center mt-4">
            <div class="card-header"><strong>آخر الإنجازات المسجلة</strong></div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="10%">#</th>
                        <th width="30%">الاسم</th>
                        <th width="30%">الإنجاز</th>
                        <th width="30%">في</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user_activities as $row)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{ $row->user->name }}</td>
                            @if(!empty($row->activity->title))
                                <td>{{ $row->activity->title}}</td>
                            @else
                                <td>تم حذف الإنجاز من قبل الإدارة</td>
                            @endif  
                            <td>{{ date('M d, Y', strtotime($row->created_at)) }} الساعة {{ date('g:i A',strtotime($row->created_at)) }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div> --}}
    </div>
  </section>
   
@endsection
   
    