<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo d-flex">
                    <i class='fas fa-book-open' style="font-size: 25px; margin-top: -2px;"></i>
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
