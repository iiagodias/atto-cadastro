<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sidenav shadow-right sidenav-light">
            <div class="sidenav-menu">
                <div class="nav accordion" id="accordionSidenav">

                    <div class="sidenav-menu-heading">Opções</div>
                    <!-- Sidenav Accordion (Dashboard)-->
                    <a
                     class="nav-link @if (in_array(Route::currentRouteName(), ['farmers.list', 'farmers.create', 'farmers.edit'])) active @endif"
                     href="javascript:void(0);"
                     data-bs-toggle="collapse"
                     data-bs-target="#collapseDashboards"
                     aria-expanded="true"
                     aria-controls="collapseDashboards">
                        <div class="nav-link-icon"><i data-feather="user"></i></div>
                         Agricultores
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div id="collapseDashboards" data-bs-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link @if (Route::is('farmers.list')) active @endif" href="{{ route('farmers.list')}}">Listar</a>
                        </nav>
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            <a class="nav-link @if (Route::is('farmers.create')) active @endif" href="{{ route('farmers.create')}}">Cadastrar</a>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            @yield('content')
        </main>
    </div>
</div>
