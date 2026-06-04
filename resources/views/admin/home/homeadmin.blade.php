<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Preloved</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="admin-body">

    @include('admin.components.sidebar')

    <main class="admin-main">
        <div class="admin-bg-grid"></div>

        <div class="admin-content">

            <div class="admin-topbar">
                <div>
                    <p class="admin-kicker">Admin Workspace</p>
                    <h1 class="admin-title">Dashboard</h1>
                    <p class="admin-subtitle">
                        Kelola katalog produk preloved dan pantau ringkasan aktivitas toko.
                    </p>
                </div>

                <div class="admin-date-card">
                    <p>Today</p>
                    <h2>{{ date('d M Y') }}</h2>
                </div>
            </div>

            <div class="admin-stat-grid">
                <div class="admin-stat-card">
                    <div class="admin-stat-icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25l-9-5.25-9 5.25m18 0l-9 5.25m9-5.25v7.5l-9 5.25m0-7.5L3 8.25m9 5.25v7.5M3 8.25v7.5l9 5.25"></path>
                        </svg>
                    </div>
                    <p>Total Products</p>
                    <h2>120</h2>
                    <span>Current catalog inventory</span>
                </div>

                <div class="admin-stat-card">
                    <div class="admin-stat-icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <p>Products Sold</p>
                    <h2>87</h2>
                    <span>Completed product transactions</span>
                </div>

                <div class="admin-stat-card dark">
                    <div class="admin-stat-icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2m6-2a10 10 0 11-20 0 10 10 0 0120 0z"></path>
                        </svg>
                    </div>
                    <p>New Orders</p>
                    <h2>24</h2>
                    <span>Waiting for admin follow-up</span>
                </div>
            </div>

            <div class="grid xl:grid-cols-12 gap-6 mt-8">
                <section class="xl:col-span-8 admin-panel">
                    <p class="admin-kicker">Recent Activity</p>
                    <h2 class="admin-panel-title">Store Updates</h2>

                    <div class="space-y-4 mt-6">
                        <div class="admin-activity-item">
                            <div class="admin-activity-dot"></div>
                            <div class="admin-activity-content">
                                <h3>Added new product</h3>
                                <p>New catalog item successfully published.</p>
                            </div>
                            <span class="admin-activity-time">5 mins ago</span>
                        </div>

                        <div class="admin-activity-item">
                            <div class="admin-activity-dot"></div>
                            <div class="admin-activity-content">
                                <h3>Updated product stock</h3>
                                <p>Product availability status has been changed.</p>
                            </div>
                            <span class="admin-activity-time">12 mins ago</span>
                        </div>

                        <div class="admin-activity-item">
                            <div class="admin-activity-dot"></div>
                            <div class="admin-activity-content">
                                <h3>New admin login</h3>
                                <p>Admin portal accessed successfully.</p>
                            </div>
                            <span class="admin-activity-time">1 hour ago</span>
                        </div>
                    </div>
                </section>

                <aside class="xl:col-span-4 admin-panel">
                    <p class="admin-kicker">Quick Action</p>
                    <h2 class="admin-panel-title">Manage Collection</h2>

                    <p class="mt-3 text-sm leading-6 text-[#687568]">
                        Tambahkan produk baru, cek katalog, dan update status item dari dashboard admin.
                    </p>

                    <div class="mt-6 space-y-3">
                        <a href="/admin/product/create" class="admin-primary-btn w-full">
                            Add New Product
                        </a>

                        <a href="/admin/product" class="admin-secondary-btn w-full">
                            View Products
                        </a>
                    </div>
                </aside>
            </div>

        </div>
    </main>

</body>

</html>