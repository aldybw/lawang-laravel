<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin-dashboard') }}">
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
            <span>Tempat Wisata</span>
        </a>
    </li>
    <!-- Nav Item - Galeri Wisata -->
    <li class="nav-item {{ (request()->is('admin/tourist-gallery*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tourist-gallery.index') }}">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri Wisata</span>
        </a>
    </li>
    <!-- Nav Item - Harga Wisata -->
    <li class="nav-item {{ (request()->is('admin/ticket*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('ticket.index') }}">
            <i class="fas fa-fw fa-tags"></i>
            <span>Harga Wisata</span>
        </a>
    </li>
    <!-- Nav Item - Jam Operasional -->
    <li class="nav-item {{ (request()->is('admin/working-hour*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('working-hour.index') }}">
            <i class="fas fa-fw fa-hourglass-end"></i>
            <span>Jam Operasional</span>
        </a>
    </li>
    <!-- Nav Item - Object Wisata -->
    <li class="nav-item {{ (request()->is('admin/tourist-object*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tourist-object.index') }}">
            <i class="fas fa-fw fa-umbrella-beach"></i>
            <span>Objek Wisata</span>
        </a>
    </li>
    <!-- Nav Item - Fasilitas -->
    <li class="nav-item {{ (request()->is('admin/facility*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('facility.index') }}">
            <i class="fas fa-fw fa-utensils"></i>
            <span>Fasilitas</span>
        </a>
    </li>
    <!-- Nav Item - Paket Wisata -->
    <li class="nav-item {{ (request()->is('admin/tourist-package*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('tourist-package.index') }}">
            <i class="fas fa-fw fa-cube"></i>
            <span>Paket Wisata</span>
        </a>
    </li>
    <!-- Nav Item - Hotel -->
    <li class="nav-item {{ (request()->is('admin/hotel')) || (request()->is('admin/hotel/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('hotel.index') }}">
            <i class="fas fa-fw fa-hotel"></i>
            <span>Hotel</span>
        </a>
    </li>
    <!-- Nav Item - Harga Hotel -->
    <li class="nav-item {{ (request()->is('admin/hotel-price*'))  ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('hotel-price.index') }}">
            <i class="fas fa-fw fa-money-check-alt"></i>
            <span>Harga Hotel</span>
        </a>
    </li>
    <!-- Nav Item - Kapasitas -->
    <li class="nav-item {{ (request()->is('admin/capacity*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('capacity.index') }}">
            <i class="fas fa-fw fa-warehouse"></i>
            <span>Kapasitas</span>
        </a>
    </li>
    <!-- Nav Item - Ketentuan Paket -->
    <li class="nav-item {{ (request()->is('admin/regulation*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('regulation.index') }}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Ketentuan Paket</span>
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
    <li class="nav-item {{ (request()->is('admin/user*')) ? 'active' : '' }}">
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