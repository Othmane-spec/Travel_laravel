<div class="sidebar-nav sidebar--nav">
    <div class="sidebar-nav-body">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="author-content">
            <div class="d-flex align-items-center">
                <div class="author-img avatar-sm">
                    <img src="/images/team9.jpg" alt="testimonial image">
                </div>
                <div class="author-bio">
                    <h4 class="author__title">Royel trizen agency</h4>
                    <span class="author__meta">Welcome to Admin Panel</span>
                </div>
            </div>
        </div>
        <div class="sidebar-menu-wrap">
            <ul class="sidebar-menu toggle-menu list-items">
                <li class="page-active"><a href="{{ route('admine_dashbord') }}"><i
                            class="la la-dashboard mr-2"></i>Dashboard</a></li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="#"><i class="la la-shopping-cart mr-2 text-color"></i>Booking</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="{{ route('hotel.index') }}">Our Booking</a></li>
                        <li><a href="{{ route('hotel.create') }}">Add new Hotel</a></li>
                        <li><a href="{{ route('room_types.index') }}">Add Room Types</a></li>
                    </ul>
                </li>
                <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="#"><i class="la la-list mr-2 text-color-2"></i>Orders</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="{{ route('booking.index') }}">Order Details</a></li>
                    </ul>
                </li>
                {{-- <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="admin-dashboard-travellers.html"><i
                            class="la la-users mr-2 text-color-3"></i>Travellers</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="admin-dashboard-traveler-detail.html">Traveller Details</a></li>
                    </ul>
                </li> --}}
                {{-- <li><a href="admin-dashboard-visa.html"><i class="la la-plane mr-2 text-color-4"></i>Visa
                        Application</a></li> --}}
                <li><a href="{{ route('admin_testimonial') }}"><i class="la la-star mr-2 text-color-5"></i>Clients
                        Reviews</a>
                </li>
                <li><a href="{{ route('admin_wishlist') }}"><i class="la la-heart mr-2 text-color-6"></i>Wishlist</a>
                </li>
                {{-- <li><a href="admin-dashboard-travel-agents.html"><i
                            class="la la-text-width mr-2 text-color-7"></i>Travel Agents</a></li> --}}
                {{-- <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="#"><i class="la la-area-chart mr-2 text-color-8"></i>Finance</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="admin-invoice.html">Invoice</a></li>
                        <li><a href="admin-payments.html">Payments</a></li>
                        <li><a href="admin-currency-list.html">Currency List</a></li>
                        <li><a href="admin-dashboard-subscribers.html">Subscribers</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <span class="side-menu-icon toggle-menu-icon">
                        <i class="la la-angle-down"></i>
                    </span>
                    <a href="#"><i class="la la-map-signs mr-2 text-color-9"></i>Locations</a>
                    <ul class="toggle-drop-menu">
                        <li><a href="admin-countries.html">Countries</a></li>
                        <li><a href="admin-airlines.html">Airlines</a></li>
                    </ul>
                </li> --}}
                <li><a href="{{ route('admin_settings') }}"><i class="la la-cog mr-2 text-color-10"></i>Settings</a>
                </li>
                <li><a href="{{ route('logout') }}"><i class="la la-power-off mr-2 text-color-11"></i>Logout</a></li>
            </ul>
        </div><!-- end sidebar-menu-wrap -->
    </div>
</div><!-- end sidebar-nav -->
