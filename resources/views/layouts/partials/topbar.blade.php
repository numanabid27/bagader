<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm">
    <div class="container-fluid">
        <!-- Sidebar Toggle (Mobile) -->
        <button class="navbar-toggler me-auto d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-flex ms-auto">
            <!-- Settings Dropdown -->
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle d-flex align-items-center" type="button"
                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2">{{ Auth::user()->name }}</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                            {{ __('Profile') }}
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<script>
    // Simple script to toggle sidebar on mobile if we decide to implement offcanvas/collapse sidebar
    // For now, the CSS media query in dashboard layout handles hiding/showing based on width.
    document.querySelector('.navbar-toggler')?.addEventListener('click', function () {
        document.querySelector('.sidebar').classList.toggle('show');
    });
</script>