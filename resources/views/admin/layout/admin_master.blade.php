<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    @include('admin.layout.left_panel')
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.layout.head_panel')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    @include('admin.layout.right_panel')
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      @yield('content')
      @include('admin.layout.footer')
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    @include('admin.layout.scripts')
  </body>
</html>
