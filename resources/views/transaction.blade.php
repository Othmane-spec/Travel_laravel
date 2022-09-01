{{-- <!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pay $1000</title>
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
</head>

<body>
    <a class="btn btn-primary m-3" href="{{ route('processTransaction') }}">Pay $1000</a>
    @if (\Session::has('error'))
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
    @endif
    @if (\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
    @endif
</body>

</html> --}}
@extends('frontend.layouts.app')
@section('content')
    @if (\Session::has('error'))
        <a class="btn btn-primary m-3" href="{{ route('processTransaction') }}">Pay </a>
        <div class="alert alert-danger">{{ \Session::get('error') }}</div>
        {{ \Session::forget('error') }}
    @endif
    @if (\Session::has('success'))
        <div class="alert alert-success">{{ \Session::get('success') }}</div>
        {{ \Session::forget('success') }}
        <section class="payment-area section-bg section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box payment-received-wrap mb-0">
                            <div class="form-title-wrap">
                                <div class="step-bar-wrap text-center">
                                    <ul class="step-bar-list d-flex align-items-center justify-content-around">
                                        <li class="step-bar flex-grow-1 step-bar-active">
                                            <span class="icon-element">1</span>
                                            <p class="pt-2 color-text-2">Choose Your Room</p>
                                        </li>
                                        <li class="step-bar flex-grow-1 step-bar-active">
                                            <span class="icon-element">2</span>
                                            <p class="pt-2 color-text-2">Your Booking & Payment Details</p>
                                        </li>
                                        <li class="step-bar flex-grow-1 step-bar-active">
                                            <span class="icon-element">3</span>
                                            <p class="pt-2 color-text-2">Booking Completed!</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-content">
                                @foreach (\App\Models\Booking::latest()->take(1)->get()
        as $key => $booking)
                                    <div class="payment-received-list">
                                        <div class="d-flex align-items-center">
                                            <i class="la la-check icon-element flex-shrink-0 mr-3 ml-0"></i>
                                            <div>
                                                <h3 class="title pb-1">Thanks {{ $booking->user->name }}!</h3>
                                                <h3 class="title">Your booking in {{ $booking->hotel->name }} is
                                                    confirmed.
                                                </h3>
                                            </div>
                                        </div>
                                        <ul class="list-items py-4">
                                            <li><i class="la la-check text-success mr-2"></i><strong
                                                    class="text-black">{{ $booking->hotel->name }}</strong> is
                                                Expecting you on <strong
                                                    class="text-black">{{ $booking->hotel->created_at }}
                                                </strong></li>
                                            <li><i class="la la-check text-success mr-2"></i>Your <strong
                                                    class="text-black">payment</strong> will be handled by
                                                {{ $booking->hotel->name }}
                                                Boston, the <strong class="color-text-2">'Payment'</strong> section below
                                                has
                                                more
                                                details</li>
                                            <li><i class="la la-check text-success mr-2"></i>Make changes to your booking or
                                                ask
                                                the
                                                properly a question in just a few clicks</li>
                                        </ul>
                                        <div class="btn-box pb-4">
                                            <a href="#" class="theme-btn mb-2 mr-2">Make changes to your booking</a>

                                        </div>
                                        <h3 class="title"><a href="#"
                                                class="text-black">{{ $booking->hotel->name }}</a>
                                        </h3>
                                        <p>{{ $booking->hotel->address }}</p>
                                        <p class="py-1"><a href="#" class="text-color">Click for directions on
                                                Google
                                                maps <i class="la la-arrow-right"></i></a></p>
                                        <p><strong class="text-black mr-1">Phone:</strong>{{ $booking->user->phone }}</p>
                                        <ul class="list-items list-items-3 list-items-4 py-4">
                                            <li><span class="text-black font-weight-bold">Your
                                                    reservation</span>{{ $booking->hotel->room_type->name }},{{ $booking->Nbrooms }}
                                                Room
                                            </li>
                                            <li><span
                                                    class="text-black font-weight-bold">Check-in&Check-out</span>{{ $booking->daterange }}
                                            </li>

                                            <li><span class="text-black font-weight-bold">Prepayment</span>You will be
                                                charged a
                                                prepayment of the total price at any time.</li>
                                            <li><span class="text-black font-weight-bold">Cancellation cost</span>Free</li>
                                        </ul>
                                        <div class="btn-box">
                                            <a href="{{ url('cancel/{id}') }}" class="theme-btn border-0 text-white bg-7"
                                                onclick="return confirm('Are you sure you want to cancel this order ?')">Cancel
                                                your booking</a>
                                        </div>
                                    </div><!-- end card-item -->
                                @endforeach
                            </div>
                        </div><!-- end payment-card -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
    @endif
@endsection
