<!-- Admin Head -->
@include('includes.admin_head')

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin: 0;">
        <!-- Admin Top Nav Bar -->
        @include('includes.admin_top_nav_bar')
        <!-- Admin Side Bar -->
        @include('includes.admin_side_bar')

    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')

</body>

</html>