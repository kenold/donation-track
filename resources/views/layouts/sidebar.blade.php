@include('partials._head')

 <body>
    @include('partials._nav')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @yield('sidebar')
            </div>

            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials._footer')

</body>
</html>
