<div class="sidebar">
    <div class="sidebar-header">
        <a href="{{ asset('theme/admin-dashbyte/dist/') }}" class="sidebar-logo">LEGALITAS</a>

    </div>
    <div id="sidebarMenu" class="sidebar-body">
        <div class="nav-group show">
            <a href="#" class="nav-label">Dashboard</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="{{ asset('/') }}" class="nav-link {{ request()->is('/') ? ' active' : '' }}"><i
                            class="ri-pie-chart-2-line"></i> <span>Dashboard Legalitas</span></a>
                </li>

            </ul>
        </div>

        <div class="nav-group show">
            <a href="#" class="nav-label">Referensi</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="{{ asset('/mahasiswa') }}" class="nav-link {{ request()->is('/mahasiswa*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Mahasiswa</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/tipe') }}" class="nav-link {{ request()->is('/tipe*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Tipe</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/dokumen') }}" class="nav-link {{ request()->is('/jenis*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Dokumen</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/jenis') }}"
                        class="nav-link {{ request()->is('/jenis*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Jenis</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/subjenis') }}"
                        class="nav-link {{ request()->is('/subjenis*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Subjenis</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/rekomendasi') }}"
                        class="nav-link {{ request()->is('/rekomendasi*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Rekomendasi</span></a>
                </li><li class="nav-item">
                    <a href="{{ asset('/tahapan') }}"
                        class="nav-link {{ request()->is('/tahapan*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Tahapan</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/kesimpulan') }}"
                        class="nav-link {{ request()->is('/kesimpulan*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Kesimpulan</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/kegiatan') }}"
                        class="nav-link {{ request()->is('/kegiatan*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Kegiatan</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/status') }}"
                        class="nav-link {{ request()->is('/status*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Status Produk</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/jabatan') }}"
                        class="nav-link {{ request()->is('/jabatan*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Jabatan</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/pengguna') }}"
                        class="nav-link {{ request()->is('/pengguna*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Pengguna</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/template') }}"
                        class="nav-link {{ request()->is('/template WA*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Daftar Template WA</span></a>
                </li>
            </ul>
        </div>

        <div class="nav-group show">
            <a href="#" class="nav-label">Transaksi</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="{{ asset('/usulan') }}"
                        class="nav-link {{ request()->is('/usulan*') ? ' active' : '' }}"><i
                            class="ri-artboard-line"></i> <span>Daftar Usulan</span></a>
                </li>
            </ul>
        </div>

        <div class="nav-group show">
            <a href="#" class="nav-label">Data Laporan</a>
            <ul class="nav nav-sidebar">
                <li class="nav-item">
                    <a href="{{ asset('/pajak') }}"
                        class="nav-link {{ request()->is('/pajak*') ? ' active' : '' }}"><i
                            class="ri-newspaper-line"></i> <span>Laporan</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset('/stnk') }}" class="nav-link {{ request()->is('/stnk*') ? ' active' : '' }}"><i
                            class="ri-calendar-event-line"></i> <span>Statistik</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar-footer">
        <div class="sidebar-footer-top">
            <div class="sidebar-footer-thumb">
                @if (session('informal_photo_name'))
                    <img src="https://berkas.dpr.go.id/portal/photos/{{ session('informal_photo_name') }}"
                        alt="Foto Profil">
                @else
                    <img src="{{ asset('theme/admin-dashbyte/dist/assets/img/user.png') }}" alt="Foto Profil">
                @endif
            </div>
            <div class="sidebar-footer-body">
                <h6><a href="#">{{ session('nama') }}</a></h6>
                <p>admin</p>
            </div>
            <a id="sidebarFooterMenu" href="" class="dropdown-link"><i class="ri-arrow-down-s-line"></i></a>
        </div>
        <div class="sidebar-footer-menu">
            <nav class="nav">
                {{-- <a href="{{ route('profil.edit', 0) }}"><i class="ri-edit-2-line"></i> Sunting Profil</a>
                <a href="{{ route('profil.index') }}"><i class="ri-profile-line"></i> Tampilkan Profil</a> --}}
            </nav>
            <hr>
            <nav class="nav">
                <a href=""><i class="ri-question-line"></i> Pusat Bantuan</a>
                <a href=""><i class="ri-lock-line"></i> Pengaturan Privasi</a>
                <a href=""><i class="ri-user-settings-line"></i> Pengaturan Akun</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="ri-logout-box-r-line"></i> Keluar
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </nav>
        </div>
    </div>
</div>
