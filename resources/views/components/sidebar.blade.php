<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="../index.html" class="logo">
                <h2 class="text-white">Dashboard</h2>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ \Route::current()->getName() == 'dashboard' ? 'active submenu' : '' }}">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ \Route::current()->getName() == 'dashboard' ? 'show' : '' }}" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li class="{{ \Route::current()->getName() == 'dashboard' ? 'active' : '' }}">
                                <a href="{{ route('dashboard') }}">
                                    <span class="sub-item">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item {{ in_array(\Route::current()->getName(), ['kelas', 'kelas.create', 'kelas.edit', 'siswa', 'siswa.create', 'siswa.edit', 'guru', 'guru.create', 'guru.edit']) ? 'active submenu' : '' }} ">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-table"></i>
                        <p>Pages</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ in_array(\Route::current()->getName(), ['kelas', 'kelas.create', 'kelas.edit', 'siswa', 'siswa.create', 'siswa.edit', 'guru', 'guru.create', 'guru.edit']) ? 'show' : '' }}" id="tables">
                        <ul class="nav nav-collapse">
                            <li
                                class="{{ in_array(\Route::current()->getName(), ['kelas', 'kelas.create', 'kelas.edit']) ? 'active' : '' }}">
                                <a href="{{ route('kelas') }}">
                                    <span class="sub-item">Kelas</span>
                                </a>
                            </li>
                            <li
                                class="{{ in_array(\Route::current()->getName(), ['siswa', 'siswa.create', 'siswa.edit']) ? 'active' : '' }}">
                                <a href="{{ route('siswa') }}">
                                    <span class="sub-item">Siswa</span>
                                </a>
                            </li>
                            <li
                                class="{{ in_array(\Route::current()->getName(), ['guru', 'guru.create', 'guru.edit']) ? 'active' : '' }}">
                                <a href="{{ route('guru') }}">
                                    <span class="sub-item">Guru</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
