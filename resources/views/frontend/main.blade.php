<!DOCTYPE html>
<html lang="en">
    @include('frontend.component.header')
    <body id="body_home">
      <div id="wrap">
         @include('frontend.component.navbar')
         @yield('content')
      </div>
         @yield('story-full-new')
      @include('frontend.component.footer')
      @include('frontend.component.js')
   </body>
</html>