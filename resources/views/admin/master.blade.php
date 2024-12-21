<!DOCTYPE html>
<html lang="en">
<!--**************************-->
@include('admin.partials.head')
<!--**************************-->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="dark" data-pc-sidebar-caption="true" data-pc-direction="ltr"
    data-pc-theme="dark">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!--**************************-->
    @include('admin.partials.sidebar')
    <!--**************************-->

    <!--**************************-->
    @include('admin.partials.header')
    <!--**************************-->


    @yield('content')


    <!--**************************-->
    @include('admin.partials.footer')
    <!--**************************-->


    <!--**************************-->
    @include('admin.partials.canvas')
    <!--**************************-->


    <!--**************************-->
    @include('admin.partials.scripts')
    <!--**************************-->



</body>
<!-- [Body] end -->

</html>
