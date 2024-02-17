<div class="navigation">
    <ul>
        <li>

        </li>
        <li class="{{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <span class="icon">
                    <i class="fas fa-tachometer-alt fa-2x"></i> <!-- Changed to dashboard icon -->
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="">
                <span class="icon">
                    <i class="fas fa-images fa-2x"></i> <!-- Changed to image gallery icon -->
                </span>
                <span class="title">Hero Sliders</span>
            </a>
        </li>
        <li class="">
            <a href="">
                <span class="icon">
                    <i class="fas fa-envelope fa-2x"></i> <!-- Kept as envelope icon -->
                </span>
                <span class="title">Mails</span>
            </a>
        </li>
        <li class="">
            <a href="">
                <span class="icon">
                    <i class="fas fa-concierge-bell fa-2x"></i> <!-- Changed to services icon -->
                </span>
                <span class="title">Services</span>
            </a>
        </li>
        <li class="">
            <a href="">
                <span class="icon">
                    <i class="fas fa-file-invoice-dollar fa-2x"></i> <!-- Changed to orders icon -->
                </span>
                <span class="title">Services Orders</span>
        </a>
        </li>
        <li class="">
            <a href="">
                <span class="icon">
                    <i class="fas fa-users fa-2x"></i> <!-- Changed to team icon -->
                </span>
                <span class="title">Team</span>
            </a>
        </li>
       <li class="">
            <a href="">
                <span class="icon">
                    <i class="fas fa-chalkboard-teacher fa-2x"></i> <!-- Changed to courses/education icon -->
                </span>
                <span class="title">Courses</span>
            </a>
        </li>




        <li class="">
            <a href="">
                <span class="icon">
                    <i class="fas fa-truck-loading fa-2x"></i> <!-- Changed to shipping/orders icon -->
                </span>
                <span class="title">Product Pre Orders</span>
            </a>
        </li>



        <li class="{{ Route::currentRouteName() == 'profile' ? 'active' : '' }}">
            <a href="{{ route('profile') }}">
                <span class="icon">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title">Profile</span>
            </a>
        </li>

        <li>
            <form action="{{ route('admin.logout') }}" method="POST" style="display: none;" id="logout-form">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Sign Out</span>
            </a>
        </li>

    </ul>
 </div>
