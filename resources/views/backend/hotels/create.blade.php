<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trizen - Travel Booking HTML Template</title>
    <!-- Favicon -->
    <link rel="icon" href="/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap"
        rel="stylesheet">

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

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="user-canvas-container">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="user-canvas-nav">
            <div class="section-tab section-tab-2 text-center pt-4 pb-3 pl-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification"
                            role="tab" aria-controls="notification" aria-selected="false">
                            Notifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab"
                            aria-controls="message" aria-selected="false">
                            Messages
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab"
                            aria-controls="account" aria-selected="true">
                            Account
                        </a>
                    </li>
                </ul>
            </div><!-- end section-tab -->
        </div>
        <div class="user-canvas-nav-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="notification" role="tabpanel"
                    aria-labelledby="notification-tab">
                    <div class="user-sidebar-item">
                        <div class="notification-item">
                            <div class="list-group drop-reveal-list">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your request has been sent</h3>
                                            <p class="msg-text">2 min ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-check"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your account has been created</h3>
                                            <p class="msg-text">1 day ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-user"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your account updated</h3>
                                            <p class="msg-text">2 hrs ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-lock"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your password changed</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-5 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-envelope"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your email sent</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-6 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-envelope"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your email changed</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
                <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">
                    <div class="user-sidebar-item">
                        <div class="notification-item">
                            <div class="list-group drop-reveal-list">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="avatar flex-shrink-0 mr-3">
                                            <img src="/images/team8.jpg" alt="">
                                        </div>
                                        <div class="msg-content w-100">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h3 class="title pb-1">Steve Wornder</h3>
                                                <span class="msg-text">3 min ago</span>
                                            </div>
                                            <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="avatar flex-shrink-0 mr-3">
                                            <img src="/images/team9.jpg" alt="">
                                        </div>
                                        <div class="msg-content w-100">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h3 class="title pb-1">Marc Twain</h3>
                                                <span class="msg-text">1 hrs ago</span>
                                            </div>
                                            <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="avatar flex-shrink-0 mr-3">
                                            <img src="/images/team10.jpg" alt="">
                                        </div>
                                        <div class="msg-content w-100">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h3 class="title pb-1">Enzo Ferrari</h3>
                                                <span class="msg-text">2 hrs ago</span>
                                            </div>
                                            <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="avatar flex-shrink-0 mr-3">
                                            <img src="/images/team11.jpg" alt="">
                                        </div>
                                        <div class="msg-content w-100">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h3 class="title pb-1">Lucas Swing</h3>
                                                <span class="msg-text">3 hrs ago</span>
                                            </div>
                                            <p class="msg-text">Ancillae delectus necessitatibus no eam</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
                <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="notification-item">
                            <a href="user-dashboard-profile.html" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="/images/team8.jpg"
                                            alt="team-img"></div>
                                    <span class="font-size-14 font-weight-bold">Ali Tufan</span>
                                </div>
                            </a>
                            <div class="list-group drop-reveal-list user-drop-reveal-list">
                                <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-user mr-2"></i>My Profile</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-booking.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-shopping-cart mr-2"></i>My
                                                Booking</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-reviews.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-heart mr-2"></i>My Reviews</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-settings.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <div class="section-block"></div>
                                <a href="index.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-power-off mr-2"></i>Logout</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('partials.sidebar')


    <section class="dashboard-area">
        <div class="dashboard-nav dashboard--nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <div class="logo mr-5">
                                <a href="index.html"><img src="/images/logo2.png" alt="logo"></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                                <div class="user-menu-open">
                                    <i class="la la-user"></i>
                                </div><!-- end user-menu-open -->
                            </div>
                            <div class="dashboard-search-box">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="form-group mb-0">
                                            <input class="form-control" type="text" name="text" placeholder="Search">
                                            <button class="search-btn"><i class="la la-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="nav-btn ml-auto">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item mr-2">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle drop-reveal-toggle-icon"
                                                id="notificationDropdownMenu" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="la la-bell"></i>
                                                <span class="noti-count">4</span>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                                <div class="dropdown-header drop-reveal-header">
                                                    <h6 class="title">You have <strong
                                                            class="text-black">4</strong> notifications</h6>
                                                </div>
                                                <div class="list-group drop-reveal-list">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element flex-shrink-0 mr-3 ml-0"><i
                                                                    class="la la-bell"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">Your request has been sent
                                                                </h3>
                                                                <p class="msg-text">2 min ago</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i
                                                                    class="la la-check"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">Your account has been
                                                                    created</h3>
                                                                <p class="msg-text">1 day ago</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i
                                                                    class="la la-user"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">Your account updated</h3>
                                                                <p class="msg-text">2 hrs ago</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i
                                                                    class="la la-lock"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">Your password changed</h3>
                                                                <p class="msg-text">Yesterday</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                </div>
                                                <a href="#" class="dropdown-item drop-reveal-btn text-center">View
                                                    all</a>
                                            </div><!-- end dropdown-menu -->
                                        </div>
                                    </div><!-- end notification-item -->
                                    <div class="notification-item mr-2">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle drop-reveal-toggle-icon"
                                                id="messageDropdownMenu" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="la la-envelope"></i>
                                                <span class="noti-count">4</span>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                                <div class="dropdown-header drop-reveal-header">
                                                    <h6 class="title">You have <strong
                                                            class="text-black">4</strong> messages</h6>
                                                </div>
                                                <div class="list-group drop-reveal-list">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="avatar flex-shrink-0 mr-3">
                                                                <img src="/images/team8.jpg" alt="">
                                                            </div>
                                                            <div class="msg-content w-100">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h3 class="title pb-1">Steve Wornder</h3>
                                                                    <span class="msg-text">3 min ago</span>
                                                                </div>
                                                                <p class="msg-text">Ancillae delectus
                                                                    necessitatibus no eam</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="avatar flex-shrink-0 mr-3">
                                                                <img src="/images/team9.jpg" alt="">
                                                            </div>
                                                            <div class="msg-content w-100">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h3 class="title pb-1">Marc Twain</h3>
                                                                    <span class="msg-text">1 hrs ago</span>
                                                                </div>
                                                                <p class="msg-text">Ancillae delectus
                                                                    necessitatibus no eam</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="avatar flex-shrink-0 mr-3">
                                                                <img src="/images/team10.jpg" alt="">
                                                            </div>
                                                            <div class="msg-content w-100">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h3 class="title pb-1">Enzo Ferrari</h3>
                                                                    <span class="msg-text">2 hrs ago</span>
                                                                </div>
                                                                <p class="msg-text">Ancillae delectus
                                                                    necessitatibus no eam</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="avatar flex-shrink-0 mr-3">
                                                                <img src="/images/team11.jpg" alt="">
                                                            </div>
                                                            <div class="msg-content w-100">
                                                                <div
                                                                    class="d-flex align-items-center justify-content-between">
                                                                    <h3 class="title pb-1">Lucas Swing</h3>
                                                                    <span class="msg-text">3 hrs ago</span>
                                                                </div>
                                                                <p class="msg-text">Ancillae delectus
                                                                    necessitatibus no eam</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                </div>
                                                <a href="#" class="dropdown-item drop-reveal-btn text-center">View
                                                    all</a>
                                            </div><!-- end dropdown-menu -->
                                        </div>
                                    </div><!-- end notification-item -->
                                    <div class="notification-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="userDropdownMenu"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm flex-shrink-0 mr-2"><img
                                                            src="/images/team8.jpg" alt="team-img"></div>
                                                    <span class="font-size-14 font-weight-bold">Royel Admin</span>
                                                </div>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                                <div class="dropdown-item drop-reveal-header user-reveal-header">
                                                    <h6 class="title text-uppercase">Welcome!</h6>
                                                </div>
                                                <div class="list-group drop-reveal-list user-drop-reveal-list">
                                                    <a href="admin-dashboard-settings.html"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i
                                                                        class="la la-user mr-2"></i> Edit Profile</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="admin-dashboard-orders.html"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i
                                                                        class="la la-shopping-cart mr-2"></i>Orders
                                                                </h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i
                                                                        class="la la-bell mr-2"></i>Messages</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="admin-dashboard-settings.html"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i
                                                                        class="la la-gear mr-2"></i>Settings</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <div class="section-block"></div>
                                                    <a href="index.html"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i
                                                                        class="la la-power-off mr-2"></i>Logout</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                </div>
                                            </div><!-- end dropdown-menu -->
                                        </div>
                                    </div><!-- end notification-item -->
                                </div>
                            </div><!-- end nav-btn -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-nav -->
        <div class="dashboard-content-wrap">
            <div class="dashboard-bread dashboard--bread dashboard-bread-2">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="breadcrumb-content">
                                <div class="section-heading">
                                    <h2 class="sec__title font-size-30 text-white">Booking</h2>
                                </div>
                            </div><!-- end breadcrumb-content -->
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="breadcrumb-list text-right">
                                <ul class="list-items">
                                    <li><a href="index.html" class="text-white">Home</a></li>
                                    <li>Dashboard</li>
                                    <li>Booking</li>
                                </ul>
                            </div><!-- end breadcrumb-list -->
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end dashboard-bread -->
            <div class="dashboard-main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                <div class="form-title-wrap">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="title">Add new Hotel</h3>
                                        {{-- <div class="select-contain">
                                            <select class="select-contain-select">
                                                <option value="1">Any Status</option>
                                                <option value="2">Approved</option>
                                                <option value="3">Pending</option>
                                                <option value="4">Cancelled</option>
                                            </select>
                                        </div> --}}

                                    </div>
                                </div>
                                <div class="form-content pb-2">
                                    <div class="pt-2">
                                        <form method="post" action="{{ route('hotel.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="py-2">
                                                <select
                                                    class="form-select me-2 @error('room_type_id') is-invalid @enderror"
                                                    id="unp-category" name="room_type_id">
                                                    <option disabled selected>Select types of room</option>
                                                    @foreach ($room_types as $room_type)
                                                        <option value="{{ $room_type->id }}">
                                                            {{ $room_type->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('room_type_id')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="input-box">
                                                <div class="mb-3 pb-2">
                                                    <label class="label-text">Check in - Check out</label>
                                                    <div class="form-group">
                                                        <span class="la la-calendar form-icon"></span>
                                                        <input class="date-range form-control"
                                                            @error('daterange') is-invalid @enderror" type="text"
                                                            name="daterange" readonly>
                                                    </div>
                                                    @error('daterange')
                                                        <strong class="text-danger">{{ $message }}</strong>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3 pb-2">
                                                <label class="form-label" for="unp-hotel-name">Hotel Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror"
                                                    type="text" id="unp-hotel-name" name="name">
                                                @error('name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            {{-- <div class="mb-3 pb-2">
                                                <label class="form-label" for="unp-room-type">Room Types</label>
                                                <input class="form-control @error('room_type') is-invalid @enderror" type="text"
                                                    id="unp-room-type" name="name">
                                                @error('room_type')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div> --}}
                                            <div class="file-drop-area mb-3">
                                                <div class="file-drop-icon ci-cloud-upload"></div><span
                                                    class="file-drop-message">Drag and
                                                    drop here to upload hotel screenshot</span>
                                                <input class="file-drop-input" type="file" multiple name="photo">
                                                <button class="file-drop-btn btn btn-primary btn-sm mb-2"
                                                    type="button">Or select
                                                    file</button>
                                                @error('photo')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="mb-3 py-2">
                                                <label class="form-label" for="unp-hotel-details">Details</label>
                                                <textarea class="form-control @error('details') is-invalid @enderror"
                                                    rows="6" id="unp-hotel-details" name="details"></textarea>
                                                @error('details')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="mb-3 pb-2">
                                                <label class="form-label" for="unp-hotel-address">Address</label>
                                                <input class="form-control @error('address') is-invalid @enderror"
                                                    type="text" id="unp-hotel-address" name="address">
                                                @error('address')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>

                                            <div class="mb-3 pb-2">
                                                <label class="form-label" for="price">Hotel price</label>
                                                <input class="form-control @error('price') is-invalid @enderror"
                                                    type="number" id="price" name="price" min="1" step="0.01">
                                                @error('price')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <button class="btn btn-primary ml-5" type="submit"><i
                                                    class="ci-cloud-upload fs-lg me-2"></i>Add Hotel
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- end form-box -->
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                    {{-- <div class="row">
                        <div class="col-lg-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link page-link-nav" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link page-link-nav" href="#">1</a></li>
                                    <li class="page-item active">
                                        <a class="page-link page-link-nav" href="#">2 <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="page-item"><a class="page-link page-link-nav" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-link-nav" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div> --}}
                    <div class="border-top mt-5"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="copy-right padding-top-30px">
                                <p class="copy__desc">
                                    &copy; Copyright Trizen 2020. Made with
                                    <span class="la la-heart"></span> by <a
                                        href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                                </p>
                            </div><!-- end copy-right -->
                        </div><!-- end col-lg-7 -->
                        <div class="col-lg-5">
                            <div class="copy-right-content text-right padding-top-30px">
                                <ul class="social-profile">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div><!-- end copy-right-content -->
                        </div><!-- end col-lg-5 -->
                    </div><!-- end row -->
                </div><!-- end container-fluid -->
            </div><!-- end dashboard-main-content -->
        </div><!-- end dashboard-content-wrap -->
    </section>











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

    <script src="//code.jquery.com/jquery.js"></script>
    {{-- @include('flashy::message') --}}
</body>

</html>
