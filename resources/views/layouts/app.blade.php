{{-- Head  --}}
@include('layouts.body.head')
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_navbar.html -->
     @include('layouts.body.nav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts.body.sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            {{-- <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              
            </div> --}}
            <div class="row">
              
            
                @yield('app')
            
          
           
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
@include('layouts.body.footer')