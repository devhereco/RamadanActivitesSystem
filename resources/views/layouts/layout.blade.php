<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="{{ config('app.name', 'المنصة') }} - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/frontend/vendor/simplebar/dist/simplebar.min.css') }}"/>
    <link rel="stylesheet" media="screen" href="{{ asset('assets/frontend/vendor/tiny-slider/dist/tiny-slider.css') }}"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/frontend/css/theme.css') }}">
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <div style="position: fixed; height: auto; width: 30%; top: 60px; margin: 0 20px !important; z-index: 99999;">
    @if(session('success'))
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-success text-white">
            <i class="ci-check-circle ms-xl-2"></i>
            <span class="fw-medium ms-lg-auto">{{ session('success')}}</span>
            <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
      @endif
      @if(session('warning'))
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-warning text-white">
            <i class="ci-check-circle ms-xl-2"></i>
            <span class="fw-medium ms-lg-auto">{{ session('warning')}}</span>
            <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
        </div>
      @endif
     </div>

    <!-- Navbar-->
    <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
    <header class="bg-light shadow-sm navbar-sticky">
      <div class="navbar navbar-expand-lg navbar-light">
        <div class="container"><a class="navbar-brand d-none d-sm-block me-4 order-lg-1" href="{{ route('home') }}">
          <img src="{{ asset('assets/frontend/img/logo.png') }}" width="142" alt="{{ config('app.name', 'المنصة') }}"></a>
          <!-- <a class="navbar-brand d-sm-none ms-xl-2 order-lg-1" href="{{ route('home') }}">
            <img src="img/logo-icon.png" width="74" alt="{{ config('app.name', 'المنصة') }}">
          </a> -->
          <div class="navbar-toolbar d-flex align-items-center order-lg-3">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            @guest
                @if (Route::has('login'))
                    <a class="btn btn-primary btn-shadow mx-1" href="{{ route('login') }}">
                        تسجيل الدخول <i class="ci-sign-in ms-xl-2"></i>
                    </a>
                @endif
                
                @if (Route::has('register'))
                    <a class="btn btn-primary btn-shadow" href="{{ route('register') }}">
                        إنشاء حساب
                    </a>
                @endif
            @else
                <a class="btn btn-primary btn-shadow" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    تسجيل الخروج <i class="ci-sign-out ms-xl-2"></i>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endif
          </div>
          <div class="collapse navbar-collapse ms-lg-auto order-lg-2" id="navbarCollapse">
            <hr class="my-3">
            <!-- Primary menu-->
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">الرئيسية</a></li>
              @if(Auth::check())
                @if(Auth::user()->rule == "admin")
                  <li class="nav-item"><a class="nav-link" href="{{ route('activity.index') }}">قائمة النشاطات</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">قائمة الحسابات</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ route('activity.statics') }}">الإحصائيات العامة</a></li>
                @endif
              @endif
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- Content -->
    @yield('content')

    <!-- Footer-->
    <footer class="border-top py-5">
        <div class="fs-ms text-muted text-center">©جميع الحقوق محفوظة. تصميم وبرمجة <a class="text-muted" href="https://devhere.co/" target="_blank" rel="noopener">التطوير هنا</a></div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100">
        <a class="d-table-cell handheld-toolbar-item" href="{{ route('home') }}">
          <span class="handheld-toolbar-icon"><i class="ci-book"></i></span><span class="handheld-toolbar-label">الأوراد</span></a>
        <a class="d-table-cell handheld-toolbar-item" href="{{ route('activity.statics') }}">
          <span class="handheld-toolbar-icon"><i class="ci-view-grid"></i></span><span class="handheld-toolbar-label">الإحصائيات</span></a>
        @guest
          @if (Route::has('login'))
            <a class="d-table-cell handheld-toolbar-item" href="{{ route('login') }}">
              <span class="handheld-toolbar-icon"><i class="ci-sign-in"></i></span><span class="handheld-toolbar-label">دخول</span></a>    
          @endif
          @if (Route::has('register'))
          <a class="d-table-cell handheld-toolbar-item" href="{{ route('register') }}">
              <span class="handheld-toolbar-icon"><i class="ci-add-user"></i></span><span class="handheld-toolbar-label">تسجيل</span></a>    
          @endif
        @else
          <a class="d-table-cell handheld-toolbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="handheld-toolbar-icon"><i class="ci-sign-out"></i></span><span class="handheld-toolbar-label">خروج</span></a>
        @endif
      </div>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="{{ asset('assets/frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/tiny-slider/dist/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/frontend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
    <!-- Main theme script-->
    <script src="{{ asset('assets/frontend/js/theme.min.js') }}"></script>
  </body>
</html>