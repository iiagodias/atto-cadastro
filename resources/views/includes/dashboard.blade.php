<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">

                    <div class="sidenav-menu-heading">Opções</div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <a class="nav-link " href="javascript:void(0);" data-bs-target="#collapseDashboards" aria-expanded="true" aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i data-feather="user"></i></div>
                         Agricultores
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div id="collapseDashboards" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link" href="dashboard-1.html">Listar</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- Main page content-->
            <div class="container-xl px-4 mt-4">
                @yield('content')
            </div>
        </main>
    </div>
</div>
