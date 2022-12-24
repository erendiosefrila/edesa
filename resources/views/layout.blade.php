@include('partials_.head')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        @include('partials_.spinner')

        @include('partials_.sidebar')

        <!-- Content Start -->
        <div class="content">
            
            @include('partials_.navbar')

            @yield('content')


            @include('partials_.footer')
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

@include('partials_.js')