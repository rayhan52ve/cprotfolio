<!DOCTYPE html>
<html lang="en">

@include('frontend.inc.head')


<body>
    <div class="se-pre-con"></div>
    @include('frontend.inc.header')
    <!-- header news Area
        ============================================ -->
@yield('content')
    <!-- footer Area
        ============================================ -->
@include('frontend.inc.footer')
    <!-- /.sub footer -->
   @include('frontend.inc.script')
</body>


</html>
