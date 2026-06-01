<!DOCTYPE html>
<html lang="en">
@include('partials.selfapply.head')

<body>

    <!-- PRELOADER SPINNER -->
    <div id="loading" class="loading--theme">
        <div id="loading-center"><span class="loader-img"></span></div>
    </div>

    <!-- PAGE CONTENT -->
    <div id="page" class="page font--poppins">
        <!-- HEADER -->
        @include('partials.selfapply.header')
        <!-- END HEADER -->
        @yield('content')
        @include('partials.selfapply.footer')
    </div>
    @include('stacks.js.selfapply.scripts')
</body>

</html>