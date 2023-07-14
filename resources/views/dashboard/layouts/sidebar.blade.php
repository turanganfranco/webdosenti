<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span> Dashboard
            </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <span data-feather="file-text" class="align-text-bottom"></span> Data Dosen
            </a>
        </li> --}}
        <hr>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dosen*') ? 'active' : '' }}" href="{{ route('dosen.index') }}">
                <span data-feather="users" class="align-text-bottom"></span>Dosen
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('pendidikan*') ? 'active' : '' }}" href="{{ route('pendidikan.index') }}">
                <span data-feather="file-text" class="align-text-bottom"></span>Pendidikan
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('penelitian*') ? 'active' : '' }}" href="{{ route('penelitian.index') }}">
                <span data-feather="file-text" class="align-text-bottom"></span>Penelitian
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('pengabdian*') ? 'active' : '' }}" href="{{ route('pengabdian.index') }}">
                <span data-feather="file-text" class="align-text-bottom"></span>Pengabdian
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('penunjang*') ? 'active' : '' }}" href="{{ route('penunjang.index') }}">
                <span data-feather="file-text" class="align-text-bottom"></span>Penunjang
            </a>
        </li>
        {{-- <hr>
        <li class="nav-item">
            <a class="nav-link" href="/">
                <span data-feather="home" class="align-text-bottom"></span> Ke Halaman Home
            </a>
        </li> --}}

</nav>