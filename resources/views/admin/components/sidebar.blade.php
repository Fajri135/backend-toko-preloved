<aside class="admin-sidebar">

    <div class="admin-sidebar-brand">
        <a href="{{ route('admin.home') }}" class="flex items-center gap-4 group">
            <div class="admin-sidebar-logo">
                P
            </div>

            <div>
                <h1 class="admin-sidebar-title">Preloved</h1>
                <p class="admin-sidebar-subtitle">Admin Console</p>
            </div>
        </a>
    </div>

    <div class="admin-sidebar-menu">
        <p class="admin-sidebar-label">Workspace</p>

        <nav class="space-y-2">
            <a href="{{ route('admin.home') }}"
               class="admin-sidebar-link {{ request()->routeIs('admin.home') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75"></path>
                </svg>

                <span>Dashboard</span>

                @if(request()->routeIs('admin.home'))
                    <span class="admin-sidebar-dot"></span>
                @endif
            </a>

            <a href="{{ route('admin.product') }}"
               class="admin-sidebar-link {{ request()->routeIs('admin.product') || request()->routeIs('admin.product.create') ? 'active' : '' }}">
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25l-9-5.25-9 5.25m18 0l-9 5.25m9-5.25v7.5l-9 5.25m0-7.5L3 8.25m9 5.25v7.5M3 8.25v7.5l9 5.25"></path>
                </svg>

                <span>Products</span>

                @if(request()->routeIs('admin.product') || request()->routeIs('admin.product.create'))
                    <span class="admin-sidebar-dot"></span>
                @endif
            </a>
        </nav>
    </div>

    <div class="admin-sidebar-footer">
        <div class="admin-profile">
            <div class="admin-avatar">AD</div>

            <div class="min-w-0">
                <p class="admin-profile-name truncate">Administrator</p>
                <p class="admin-profile-email truncate">admin@email.com</p>
            </div>
        </div>

        <button onclick="logout()" class="admin-logout">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6A2.25 2.25 0 005.25 5.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
            </svg>
            Sign Out
        </button>
    </div>

</aside>

<script>
    function logout() {
        localStorage.removeItem("token");
        window.location.href = "/login";
    }
</script>