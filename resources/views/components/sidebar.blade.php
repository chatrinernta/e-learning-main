<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo d-flex">
                    <i class='bi bi-book' style="font-size: 25px; margin-top: -2px;"></i>
                    <h3 style="margin-top: -5px; margin-left: 20px;">E-LEARNING</h3>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                @if(Auth::user()->role == 'admin')
                    <li class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-title">Interface</li>
                    <li class="sidebar-item {{ Request::is('admin/tugas') ? 'active' : '' }}">
                        <a href="{{ route('admin.tugas') }}" class="sidebar-link">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Tugas</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('admin/diskusi') ? 'active' : '' }}">
                        <a href="{{ route('admin.diskusi') }}" class="sidebar-link">
                            <i class="bi bi-chat-dots-fill"></i>
                            <span>Diskusi</span>
                        </a>
                    </li>
                    <li class="sidebar-item has-sub {{ Request::is('admin/XII_PPLG1', 'admin/XII_PPLG2', 'admin/XII_DKV1') ? 'active' : '' }}">
                        <a href="daftarkelas" class="sidebar-link">
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Daftar Kelas</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item {{ Request::is('admin/XII_PPLG1') ? 'active' : '' }}">
                                <a href="/admin/XII_PPLG1">XII PPLG 1</a>
                            </li>
                            <li class="submenu-item {{ Request::is('admin/XII_PPLG2') ? 'active' : '' }}">
                                <a href="/admin/XII_PPLG2">XII PPLG 2</a>
                            </li>
                            <li class="submenu-item {{ Request::is('admin/XII_DKV1') ? 'active' : '' }}">
                                <a href="/admin/XII_DKV1">XII DKV 1</a>
                            </li>
                        </ul>
                    </li>

                @elseif(Auth::user()->role == 'guru')
                <li class="sidebar-item {{ Request::is('guru/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('guru.dashboard') }}" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-title">Interface</li>
                    <li class="sidebar-item {{ Request::is('guru/tugas') ? 'active' : '' }}">
                        <a href="{{ route('guru.tugas') }}" class="sidebar-link">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Tugas</span>
                        </a>
                    </li>
                        <li class="sidebar-item {{ Request::is('guru/diskusi') ? 'active' : '' }}">
                        <a href="{{ route('guru.diskusi') }}" class="sidebar-link">
                            <i class="bi bi-chat-dots-fill"></i>
                            <span>Diskusi</span>
                        </a>
                    </li>
                    <li class="sidebar-item has-sub {{ Request::is('guru/XIIPPLG1', 'admin/XIIPPLG2',) ? 'active' : '' }}">
                        <a href="daftarkelas" class="sidebar-link">
                            <i class="bi bi-person-badge-fill"></i>
                            <span>Daftar Kelas</span>
                        </a>
                        <ul class="submenu">
                            <li class="submenu-item {{ Request::is('guru/XIIPPLG1') ? 'active' : '' }}">
                                <a href="/guru/XIIPPLG1">XII PPLG 1</a>
                            </li>
                            <li class="submenu-item {{ Request::is('guru/XIIPPLG2') ? 'active' : '' }}">
                                <a href="/guru/XIIPPLG2">XII PPLG 2</a>
                            </li>
                        </ul>
                    </li>                    
                    
                @else(Auth::user()->role == 'murid')
                <li class="sidebar-item {{ Request::is('murid/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('murid.dashboard') }}" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-title">Interface</li>
                    <li class="sidebar-item {{ Request::is('murid/tugas') ? 'active' : '' }}">
                        <a href="{{ route('murid.tugas') }}" class="sidebar-link">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Tugas</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('murid/diskusi') ? 'active' : '' }}">
                        <a href="{{ route('murid.diskusi') }}" class="sidebar-link">
                            <i class="bi bi-chat-dots-fill"></i>
                            <span>Diskusi</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ Request::is('murid/daftarsiswa') ? 'active' : '' }}">
                         <a href="{{ route('murid.daftarsiswa') }}" class="sidebar-link">
                              <i class="bi bi-person-badge-fill"></i>
                             <span>Daftar siswa</span>
                             </a>
                    </li>

                        <ul class="submenu">    
                        </ul>
                @endif
 
                <li class="sidebar-item">
                    <a href="{{ route('logout') }}" class="sidebar-link"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Log Out</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>