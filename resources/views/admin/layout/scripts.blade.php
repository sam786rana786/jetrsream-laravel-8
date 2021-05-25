<script src="{{ asset('adminbackend/lib/jquery/jquery.js') }}"></script>
<script src="{{ asset('adminbackend/lib/popper.js/popper.js') }}"></script>
<script src="{{ asset('adminbackend/lib/bootstrap/bootstrap.js') }}"></script>
<script src="{{ asset('adminbackend/lib/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('adminbackend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
<script src="{{ asset('adminbackend/lib/jquery.sparkline.bower/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('adminbackend/lib/d3/d3.js') }}"></script>
<script src="{{ asset('adminbackend/lib/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('adminbackend/lib/chart.js/Chart.js') }}"></script>
<script src="{{ asset('adminbackend/lib/Flot/jquery.flot.js') }}"></script>
<script src="{{ asset('adminbackend/lib/Flot/jquery.flot.pie.js') }}"></script>
<script src="{{ asset('adminbackend/lib/Flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('adminbackend/lib/flot-spline/jquery.flot.spline.js') }}"></script>

<script src="{{ asset('adminbackend/js/starlight.js') }}"></script>
<script src="{{ asset('adminbackend/js/ResizeSensor.js') }}"></script>
<script src="{{ asset('adminbackend/js/dashboard.js') }}"></script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message')}}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message')}}");
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
