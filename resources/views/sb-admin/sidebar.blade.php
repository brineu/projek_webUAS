<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <!-- <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div> -->
    <div class="sidebar-brand-text mx-3">DentCare</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

@role('admin')
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/dashboard_admin">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard Admin</span></a>
</li>
@endrole

@role('admin|pasien')
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard User</span></a>
</li>
@endrole

@role('admin|dokter')
<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/dashboard_dokter">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard Dokter</span></a>
</li>
@endrole
<!-- Divider -->
<hr class="sidebar-divider">

@role('admin')
    <!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#main"
        aria-expanded="true" aria-controls="main">
        <i class="fas fa-fw fa-folder"></i>
        <span>Admin</span>
    </a>
    <div id="main" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/data_dokter">Data Dokter</a>
            <a class="collapse-item" href="/data_pasien">Data Pasien</a>
            <a class="collapse-item" href="/data_admin">Data Admin</a>
            
        </div>
    </div>
</li>
@endrole

@role('admin|pasien')
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengaturan"
        aria-expanded="true" aria-controls="pengaturan">
        <i class="fas fa-fw fa-users"></i>
        <span>User</span>
    </a>
    <div id="pengaturan" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="/profilePasien">Profile Pasien</a>
            <a class="collapse-item" href="utilities-border.html">Jadwal Booking</a>
            <a class="collapse-item" href="/profile_user">Tentang Kami</a>
        </div>
    </div>
</li>
@endrole

@role('admin|dokter')
<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengaturan"
        aria-expanded="true" aria-controls="pengaturan">
        <i class="fas fa-fw fa-user-nurse"></i>
        <span>Dokter</span>
    </a>
    <div id="pengaturan" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="utilities-color.html">Profile Dokter</a>
            <a class="collapse-item" href="utilities-border.html">Footer</a>
            <a class="collapse-item" href="/profile_user">Tentang Kami</a>
        </div>
    </div>
</li>
@endrole


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>