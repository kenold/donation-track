@include('partials._head')

 <body>
    @include('partials._nav')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    @yield('content')

            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials._footer')
    
</body>
</html>
