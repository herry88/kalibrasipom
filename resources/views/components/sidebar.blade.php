<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item  active">
            <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

        </li>
        <li class="menu-header">Menu Master</li>
        @if (Auth::user()->level == 'superadmin')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data Master </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tipebalai.index') }}">Data Tipe Balai</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('balai.index') }}">Data Balai</a></li>

                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data Product </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tipebalai.index') }}">Data Tipe Balai</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('balai.index') }}">Data Balai</a></li>

                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Transaksi </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tipebalai.index') }}">Data Tipe</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('balai.index') }}">Data Alat/a></li>

                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit()"><i
                        class="far fa-sign-out-alt"></i> <span>Logout</span>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                </a></li>
        @elseif(Auth::user()->level == 'admin')
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data Master </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tipebalai.index') }}">Data Tipe Balai</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('balai.index') }}">Data Balai</a></li>

                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Data Product </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tipebalai.index') }}">Data Tipe Balai</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('balai.index') }}">Data Balai</a></li>

                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit()"><i
                        class="far fa-sign-out-alt"></i> <span>Logout</span>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                        @csrf
                    </form>
                </a></li>
        @else
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Transaksi </span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('tipebalai.index') }}">Data Tipe</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('balai.index') }}">Data Alat/a></li>

                    <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>
            <li><a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit()"><i
                        class="far fa-sign-out-alt"></i> <span>Logout</span>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                    </form>
                </a></li>
        @endif
        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank
                    Page</span></a></li>


    </ul>
</aside>
