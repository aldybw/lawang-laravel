<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Lawang Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('admin')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin-dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- Nav Item - Paket Wisata -->
    <li class="nav-item {{ (request()->is('admin/tourist-attraction*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tourist-attraction.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Paket Wisata</span>
        </a>
    </li>
    <!-- Nav Item - Galeri Wisata -->
    <li class="nav-item {{ (request()->is('admin/tourist-gallery*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tourist-gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri Wisata</span>
        </a>
    </li>
    <!-- Nav Item - Checkout -->
    <li class="nav-item {{ (request()->is('admin/checkout*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('checkout.index') }}">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Checkout</span>
        </a>
    </li>
    <!-- Nav Item - Users -->
    <li class="nav-item {{ (request()->is('admin/users*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->