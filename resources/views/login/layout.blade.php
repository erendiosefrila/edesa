@include('partials_.head')

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        @include('partials_.spinner')

        <!-- Content Start -->
        <div class="content">

            @yield('content')
        </div>
        <!-- Content End -->
    </div>

@include('partials_.js')