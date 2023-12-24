<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary position-fixed">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Dendi Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="flex-column list-group">
                <li
                    class="btn btn-primary list-group-item {{ request()->is('dashboard') || request()->is('admin') ? 'active' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2" aria-current="page" href="/dashboard">
                        <i
                            class="bi {{ request()->is('dashboard') || request()->is('admin') ? 'bi-house-fill' : 'bi-house' }}"></i>
                        Dashboard
                    </a>
                </li>
                <li class="btn btn-primary list-group-item {{ request()->is('dashboard/posts*') ? 'active' : '' }}">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/posts">
                        <i
                            class="bi {{ request()->is('dashboard/posts*') ? 'bi-file-earmark-text-fill' : 'bi-file-earmark-text' }}"></i>
                        My Posts
                    </a>
                </li>
            </ul>

            <hr class="my-3">
            {{-- Pemanggilan Gates Authorization untuk hak akses user tertentu --}}
            @can('admin')
                <h6
                    class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                    <span>Administrator</span>
                    {{-- <a class="link-secondary" href="#" aria-label="Add a new report">
                    <i class="bi bi-plus-circle"></i>
                </a> --}}
                </h6>
                <ul class="flex-column mb-auto list-group">
                    <li
                        class="btn btn-primary list-group-item {{ request()->is('dashboard/categories*') ? 'active' : '' }}">
                        <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/categories">
                            <i class="bi {{ request()->is('dashboard/categories*') ? 'bi-grid-fill' : 'bi-grid' }}"></i>
                            Post Categories
                        </a>
                    </li>
                    <li class="btn btn-primary list-group-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="#">
                            <i class="bi bi-gear"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            @endcan
        </div>
    </div>
</div>
