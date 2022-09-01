<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="author" content="DevOthmane">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trizen - Travel Booking HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.png">

    <!-- Google Fonts -->
    <link
        href={{ asset('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap') }}
        rel="stylesheet">

    <script src="https://use.fontawesome.com/e5eb9268e2.js"></script>

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- start cssload-loader -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </div>

    @include('frontend.partials.header')




    @yield('content')

    @include('frontend.partials.footer')


    @include('frontend.partials.auth_modal')




    <!-- Template JS Files -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.min.js') }}"></script>
    <script src="{{ asset('js/animated-headline.js') }}"></script>
    <script src="{{ asset('js/jquery.ripples-min.js') }}"></script>
    <script src="{{ asset('js/quantity-input.js') }}"></script>








    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')

    <script>
        addToWishlist()

        function addToWishlist() {
            $.ajax({
                type: "GET",
                url: "add_wishlist",

                success: function(response) {
                    var response = JSON.parse(response)
                    $('.add_wishlist').text(response);

                }
            });

        }

        var my_id = "{{ Auth::id() }}";
        $(document).ready(function() {
            $('update_wishlist').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }
                });
                var product_id = $(this).data('hotelid');
                alert(hotelid);

            });
        });
    </script>


    {{-- <script src="//code.jquery.com/jquery.js"></script>
@include('flashy::message') --}}
</body>

</html>
