@include('layouts.head-css')

<body>
    <div class="page-wrapper">
        @include('layouts.head')

        @yield('content')

        @include('layouts.footer')

    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    @include('layouts.mobile-menu')

    @include('layouts.signin-register-form')

    @include('layouts.newsletter-popup')

    @include('layouts.footer-script')

</body>


<!-- molla/index-9.html  22 Nov 2019 09:58:03 GMT -->

</html>
