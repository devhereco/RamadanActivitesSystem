@extends('layouts.layout')

@section('content')

  <!-- Hero section-->
  <section class="bg-accent bg-position-center bg-size-cover" style="background-image: url(img/intro/intro-hero.jpg);">
    <div class="container">
        <div class="row pt-md-5 justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10 text-center py-xl-3">
                <h1 class="text-light"><span class='fw-light'><strong>قائمة قائمة النشاطات</strong></h1>
                <div class="py-4 py-sm-5"><a class="btn btn-primary btn-lg" href="{{ route('activity.create') }}" data-scroll>إنشاء جديد</a></div>
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
                    <th>العنوان</th>
                    <th>اليوم</th>
                    <th>المحتوى</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                </tr>
            </thead>
            <tbody>
                @forelse($activities as $activity)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $activity->title }}</td>
                        <td>اليوم {{ $activity->day }}</td>
                        <td>{{ Str::limit($activity->content, 100) }}</td>
                        <td><a class="btn btn-info" href="{{ route('activity.edit',$activity->id) }}">تعديل</a></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure?')" href="{{route('activity.destroy', $activity->id)}}" type="submit">حذف</a></td>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
    </div>
  </section>
   
@endsection
   
    