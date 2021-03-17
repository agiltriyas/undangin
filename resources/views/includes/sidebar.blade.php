<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('asset/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">UNDANGIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link" id="/">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @role('superadmin|admin')
                <li class="nav-header">ADMIN</li>
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link" id="/member">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Members
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('theme.index') }}" class="nav-link" id='/theme'>
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Themes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                            Transactions
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"></i>
                        <p>
                            Change Log
                        </p>
                    </a>
                </li>
                @endrole
                @role('superadmin|user')
                <li class="nav-header">PROFILE</li>
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link">
                        <i class="nav-icon far fa-user-circle"></i>
                        <p>
                            {{ ucfirst(auth()->user()->name) }}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Undangan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Balance
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('member.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-flag"></i>
                        <p>
                            Notif Center
                        </p>
                    </a>
                </li>
          {{--<li class="nav-header">UNDANGAN</li> --}}
          @endrole
                <li class="nav-item mt-5">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn nav-link" type="submit">
                            <i class="nav-icon fas fa-power-off"></i>
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

@push('after-script')
<script>
    const url = window.location.pathname.split(("/"));
    const getSide = document.getElementById("/"+url[1]);
    getSide.classList.add('active');
</script>
@endpush