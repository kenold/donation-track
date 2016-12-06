@include('partials._head')

 <body>
    @include('partials._nav')

    <div class="container">
        <div class="page-header">
            <h1>Most Recent Contacts</h1>
        </div>

        <div class="row">
            <div class="col-md-12 content">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partials._footer')

</body>
</html>
