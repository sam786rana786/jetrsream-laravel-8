@include('user.layout.head')
<body id="page-top">
    <!-- preloader -->
    <div class="preloader">
        <img src="{{ asset('userbackend/panel/assets/images/preloader.gif') }}" alt="">
    </div>
    <!-- wrapper -->
    <div class="wrapper">
        <!-- header area -->
        @include('user.layout.header')

        <!-- sidebar area -->
        @include('user.layout.sidebar')

        <div class="content_wrapper">
            <!--middle content wrapper-->
        @yield('content')
            <!--/middle content wrapper-->
        </div>
        <!--/ content wrapper -->
</div>
<!--/ wrapper -->
<!-- jquery -->
<script src="{{ asset('userbackend/panel/assets/js/jquery.min.js') }}"></script>
<!-- popper Min Js -->
<script src="{{ asset('userbackend/panel/assets/js/popper.min.js') }}"></script>
<!-- Bootstrap Min Js -->
<script src="{{ asset('userbackend/panel/assets/js/bootstrap.min.js') }}"></script>
<!-- Fontawesome-->
<script src="{{ asset('userbackend/panel/assets/js/all.min.js') }}"></script>
<!-- metis menu -->
<script src="{{ asset('userbackend/panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>
<script
    src="{{ asset('userbackend/panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}"></script>
<!-- nice scroll bar -->
<script src="{{ asset('userbackend/panel/assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('userbackend/panel/assets/plugins/scrollbar/scroll.active.js') }}"></script>
<!-- counter -->
<script src="{{ asset('userbackend/panel/assets/plugins/counter/js/counter.js') }}"></script>
<!-- chart -->
<script src="{{ asset('userbackend/panel/assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>
<script src="{{ asset('userbackend/panel/assets/plugins/chartjs-bar-chart/chart.js') }}"></script>
<!-- pie chart -->
<script src="{{ asset('userbackend/panel/assets/plugins/pie_chart/chart.loader.js') }}"></script>
<script src="{{ asset('userbackend/panel/assets/plugins/pie_chart/pie.active.js') }}"></script>
<!-- Main js -->
<script src="{{ asset('userbackend/panel/assets/js/main.js') }}"></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message')}}");
            break;
        case 'success':
            toastr.info("{{ Session::get('message')}}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message')}}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message')}}");
            break;
    }
    @endif
</script>
</body>
</html>
