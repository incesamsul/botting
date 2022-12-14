<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">based</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            {{-- MENU PENGGUNA --}}
            {{-- SEMUA PENGGUNA / USER MEMPUNYAI MENU INI --}}
            <li class="menu-header">Pengguna</li>
            <li class="" id="liDashboard"><a class="nav-link" href="{{ URL::to('/dashboard') }}"><i
                        class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            {{-- <li class="" id="liProfile"><a class="nav-link" href="{{ URL::to('/profile') }}"><i
                        class="fas fa-user"></i>
                    <span>Profile</span></a></li> --}}
            <li class="" id="liBantuan"><a class="nav-link" href="{{ URL::to('/bantuan') }}"><i
                        class="fas fa-question-circle"></i> <span>Bantuan</span></a></li>



            @if (auth()->user()->role == 'Administrator')
                {{-- MENU ADMIN --}}
                <li class="menu-header">Admin</li>
                <li class="nav-item dropdown " id="liPengguna">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i>
                        <span>Pengguna</span></a>
                    <ul class="dropdown-menu">
                        <li id="liManajemenPengguna"><a class="nav-link" href="/admin/pengguna">Manajemen Pengguna</a>
                        </li>
                    </ul>
                </li>

                <li class="" id="liTema"><a class="nav-link" href="{{ URL::to('/admin/tema') }}"><i
                            class="fas fa-image"></i> <span>tema</span></a></li>

                <li class="" id="liUndangan"><a class="nav-link" href="{{ URL::to('/admin/undangan') }}"><i
                            class="fas fa-list"></i> <span>Udangan</span></a></li>

                {{-- END OF MENU ADMIN --}}
            @endif
            @if (auth()->user()->role == 'pelanggan')
                {{-- MENU ADMIN --}}
                <li class="menu-header">Pelanggan</li>
                <li class="" id="liInformasi"><a class="nav-link" href="{{ URL::to('/pelanggan/info') }}"><i
                            class="fas fa-list"></i> <span>Informasi</span></a></li>

                <li class="" id="liTema"><a class="nav-link" href="{{ URL::to('/pelanggan/tema') }}"><i
                            class="fas fa-image"></i> <span>Tema</span></a></li>

                <li class="" id="liPublish"><a class="nav-link" href="{{ URL::to('/pelanggan/publish') }}"><i
                            class="fas fa-globe"></i> <span>Publish</span></a></li>

                <li class="" id="liDaftarTamu"><a class="nav-link" href="{{ URL::to('/pelanggan/daftar_tamu') }}"><i
                            class="fas fa-users"></i> <span>Daftar tamu</span></a></li>

                <li class="" id="liTamuUndangan"><a class="nav-link" href="{{ URL::to('/tamu_undangan') }}"><i
                            class="fas fa-qrcode"></i> <span>Tamu undangan</span></a></li>

                <li class="" id="liRegistrasi"><a class="nav-link" href="{{ URL::to('/pelanggan/registrasi') }}"><i
                            class="fas fa-address-card"></i> <span>Registrasi</span></a></li>

                {{-- END OF MENU ADMIN --}}
            @endif







        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ URL::to('/logout') }}" class="btn bg-main text-white btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </aside>
</div>
