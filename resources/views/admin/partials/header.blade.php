<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/"><img
            src="{{ asset('dps-icon.ico') }}" alt="DPS" class="img " width="50px" height="50px">Dendi Blog</a>

    <ul class="navbar-nav flex-row d-md-none ms-auto">
        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false"
                aria-label="Toggle search">
                <i class="bi bi-search"></i>
            </button>
        </li>
        <li class="nav-item text-nowrap">
            <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
        </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100 expanded">
        <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    </div>

    <form action="/logout" method="post">
        @csrf
        <button class="form-control w-100 rounded-0 border-0" type="submit"><i class="bi bi-box-arrow-up-right"></i>
            Logout</button>
    </form>
</header>
