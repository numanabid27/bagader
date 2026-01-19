<aside class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-white">
    <a href="{{ route('dashboard') }}"
        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <x-application-logo class="w-25 mx-3" />
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                aria-current="page">
                <i class="pbmit-base-icon-home"></i>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('products.index') }}"
                class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}" aria-current="page">
                <i class="pbmit-base-icon-home"></i>
                Products
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('categories.index') }}" aria-current="page"
                class="nav-link {{ request()->routeIs('categories.*') ? 'active' : '' }}">
                <i class="pbmit-base-icon-home"></i>
                Categories
            </a>
        </li>

    </ul>
</aside>