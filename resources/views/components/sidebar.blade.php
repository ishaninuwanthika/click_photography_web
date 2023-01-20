<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-text mx-3">Click<sup>photography</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#reservation" aria-expanded="true"
        aria-controls="reservation">
        <i class="fas fa-calendar"></i>
        <span>Reservations</span>
    </a>

    <div id="reservation" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('all.reservations') }}">All Reservations</a>
            <a class="collapse-item" href="{{ route('calendar.view') }}">Calender</a>
        </div>
    </div>

</li>

<!-- Nav Item - Pages Collapse Menu -->


<!-- Sidebar Toggler (Sidebar) -->
{{-- <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> --}}
