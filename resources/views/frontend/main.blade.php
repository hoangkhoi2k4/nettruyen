<!DOCTYPE html>
<html lang="en">
    @include('frontend.component.header')
    <body id="body_home">
      <div id="wrap">
         @include('frontend.component.navbar')
         <div class="container" id="intro-index">
            @yield('content')
         </div>
         <div class="container" id="intro-index">
            @yield('content-2')
         </div>
      </div>
      @if(\Request::route() -> getName() == 'home')
         @include('frontend.component.story-full-new')
      @endif
      @include('frontend.component.footer')
      @include('frontend.component.js')
   </body>
</html>