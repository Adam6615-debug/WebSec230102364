<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./even">Even Numbers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./prime">Prime Numbers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./multable">Multiplication Table</a>
            </li>
            <li class="nav-item">
<<<<<<< HEAD
                <a class="nav-link" href="./dosomething">Do Something</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./miniTest">Mini Test</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./transcript">Transcript</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products_list') }}">Products</a>
            </li>
        </ul>

        <!-- ✅ Moved auth/login/register links inside the same navbar -->
        <ul class="navbar-nav ms-auto">
            @auth
            <li class="nav-item">
                <a class="nav-link">{{ auth()->user()->name }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('do_logout') }}">Logout</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
=======
                <a class="nav-link" href="{{route('products_list')}}">Products</a>
            </li>
            @can('admin_users')
            <li class="nav-item">
                <a class="nav-link" href="{{route('addemployee')}}">Add Employee</a>
            </li>
            @endcan
        </ul>
            @can('show_users')
            <li class="nav-item">
                <a class="nav-link" href="{{route('users')}}">Users</a>
            </li>
            @endcan
        </ul>
        <ul class="navbar-nav">
        @auth
    <li class="nav-link">Credit: ${{ auth()->user()->credit }}</li>
@endauth
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{route('profile')}}">{{auth()->user()->name}}</a>
            </li>
            @auth
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orders') }}">Orders</a>
            </li>
        </ul>
        @endauth
            <li class="nav-item">
                <a class="nav-link" href="{{route('do_logout')}}">Logout</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Register</a>
>>>>>>> 80ae6ee (after midterm disccusion)
            </li>
            @endauth
        </ul>
    </div>
</nav>
