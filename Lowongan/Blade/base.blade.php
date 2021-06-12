<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Meta Section -->
    @yield('meta')

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">

    <!-- Title Section -->
    <title>myITS Connect - @yield('title')</title>

    <!-- Link Section -->
    @yield('link')

  </head>
  <body @yield('body-class')>
    <!-- off-canvas -->
    @include('off-canvas')

    <!-- aside -->
    @include('aside')

    <div class="content ht-100v pd-0">
      <!-- content-header -->
      @include('content-header')

      <!-- content-body -->
      @yield('content-body')
    </div><!-- content -->

    <!-- modal -->
    @yield('modal')

    <!-- script -->
    @yield('script')    
  </body>
</html>
