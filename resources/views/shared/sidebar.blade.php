<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-bicycle"></i>
    </div>
    <div class="sidebar-brand-text mx-3"> Velo.tn </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link"  href="{{ route('dashboard.index') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Événements -->

<!-- Nav Événements -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#"  data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-users"></i>
        <span> Cycling Users</span>
    </a>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#"  data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-calendar"></i>
        <span> Cycling Events</span>
    </a>
</li>

<!-- Nav Balades -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('rides.index') }}" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
       <i class="fas fa-fw fa-map"></i>
        <span> Cycling Rides </span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Rides Tracking</h6>
            <a class="collapse-item"  href="{{ route('tracks.index') }}" >Real Time Tracking</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Rides Management</h6>
            <a class="collapse-item" href="{{ route('rides.index') }}">Rides Records</a>
        </div>
    </div>
</li>

<!-- Nav Associations -->
<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('associations.index') }}" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Cycling Associations </span>
    </a>
</li>

<!-- Nav Location -->
<li class="nav-item">
    <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-credit-card"></i>
        <span> Cycling Rentals </span></a>
</li>

<!-- Nav Vélo -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-fw fa-bicycle"></i>
        <span> Cycling Bikes </span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>