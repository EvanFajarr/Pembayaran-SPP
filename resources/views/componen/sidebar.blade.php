<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{-- {{ auth()->guard('user')->user()->username_15483 }} --}}
                            {{-- <span
                                class="user-level text-capitalize">{{ auth()->guard('user')->user()->level->level_15483 }}</span>
                        </span> --}}
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
          
                
           
            <ul class="nav nav-primary">
                <li class="nav-item @if (Request::is('dashboard')) active @endif">
                    <a href="{{ route('dashboard') }}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @can('admin')
                <li class="nav-section">
                    <h4 class="text-section">Data Pengguna</h4>
                </li>
                <li class="nav-item @if (Request::is('siswa*')) active @endif">
                    <a href="{{ route('siswa.index') }}">
                        {{-- <img src="/assets/img/siswa.png" alt="siswa Icon" class="img-fluid icon"> --}}
                        <p class="px-3">Data Siswa</p>
                    </a>
                </li>

                <li class="nav-item @if (Request::is('kelas*')) active @endif">
                    <a href="{{ route('kelas.index') }}">
                        {{-- <img src="/assets/img/petugas.png" alt="Petugas Icon" class="img-fluid icon"> --}}
                        <p class="px-3">Data Kelas</p>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('spp*')) active @endif">
                    <a href="{{ route('spp.index') }}">
                        {{-- <img src="/assets/img/petugas.png" alt="Petugas Icon" class="img-fluid icon"> --}}
                        <p class="px-3">Data spp</p>
                    </a>
                </li>
                <li class="nav-item @if (Request::is('petugas*')) active @endif">
                    <a href="{{ route('petugas.index') }}">
                        {{-- <img src="/assets/img/petugas.png" alt="Petugas Icon" class="img-fluid icon"> --}}
                        <p class="px-3">Data Petugas</p>
                    </a>
                </li>

                <li class="nav-item @if (Request::is('cetak*')) active @endif">
                    <a href="/cetak">
                        {{-- <img src="/assets/img/cetak.png" alt="cetak Icon" class="img-fluid icon"> --}}
                        <p class="px-3">Cetak</p>
                    </a>
                </li>
                @endcan
                <li class="nav-item @if (Request::is('pemabayaran*')) active @endif">
                    <a href="/pembayaran">
                        {{-- <img src="/assets/img/petugas.png" alt="Petugas Icon" class="img-fluid icon"> --}}
                        <p class="px-3">Pembayaran</p>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
</div>
