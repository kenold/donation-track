@include('partials._head')

 <body>
    @include('partials._nav')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @yield('sidebar')
            </div><!-- /.col-md-3 -->

            <div class="col-md-9 content">
                @yield('content')
            </div><!-- /.col-md-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <!-- Footer -->
    @include('partials._footer')

</body>
</html>
