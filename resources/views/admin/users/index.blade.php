@extends('layouts.layout')

@section('content')

  <!-- Hero section-->
  <section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
        <div class="row pt-md-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
                <h1 class="text-light"><span class='fw-light'><strong>قائمة الحسابات</strong></h1>
            </div>
        </div>
    </div>
  </section>
  <!-- Demos section-->
  <section class="container pt-5 pb-3 pb-lg-5" id="demos">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>اسم المستخدم</th>
                    <th>البريد الإلكتروني</th>
                    <th>الجنس</th>
                    <th>الجنسية</th>
                    <th>سنة الميلاد</th>
                    <th>إنشئ في</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if($user->gender == 'male')
                                ذكر
                            @else
                                إنثى
                            @endif
                        </td>
                        <td>{{ $user->nationality ? $user->country->name : '' }}</td>
                        <td>{{ $user->birthday }}</td>
                        <td>{{ date('m - d - Y',strtotime($user->created_at)) }}</td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('users.destroy', $user->id)}}" type="submit">حذف</a></td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
  </section>
   
@endsection
   
    