<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management | Admin</title>

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

            {{-- HEADER --}}
            <div class="admin-product-hero">
                <div>
                    <div class="admin-page-tag">
                        <span></span>
                        Inventory Control
                    </div>

                    <h1 class="admin-product-title">
                        Product Collection
                    </h1>

                    <p class="admin-product-subtitle">
                        Kelola koleksi preloved, update status item, dan pantau katalog produk dari satu dashboard.
                    </p>
                </div>

                <div class="admin-product-actions">
                    <a href="/admin/product/create" class="admin-primary-btn">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                        </svg>
                        Add Product
                    </a>
                </div>
            </div>

            {{-- SUMMARY --}}
            <div class="admin-product-summary">
                <div class="admin-mini-stat">
                    <p>Total Items</p>
                    <h3 id="totalItems">0</h3>
                    <span>All catalog products</span>
                </div>

                <div class="admin-mini-stat">
                    <p>Available</p>
                    <h3 id="availableItems">0</h3>
                    <span>Ready to sell</span>
                </div>

                <div class="admin-mini-stat">
                    <p>Reserved</p>
                    <h3 id="reservedItems">0</h3>
                    <span>Waiting confirmation</span>
                </div>

                <div class="admin-mini-stat dark">
                    <p>Sold Out</p>
                    <h3 id="soldItems">0</h3>
                    <span>Completed items</span>
                </div>
            </div>

            {{-- TABLE CARD --}}
            <section class="admin-inventory-card">

                <div class="admin-inventory-head">
                    <div>
                        <p class="admin-kicker">Catalog List</p>
                        <h2>Product Inventory</h2>
                    </div>

                    <div class="admin-inventory-tools">
                        <div class="admin-search-box">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.35-5.65a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <input id="productSearch" type="text" placeholder="Search product...">
                        </div>
                    </div>
                </div>

                <div class="admin-product-table-wrap">
                    <table class="admin-product-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th class="text-right">Update</th>
                            </tr>
                        </thead>

                        <tbody id="productTable">
                            <script>
                                document.write(Array(5).fill().map(() => `
                                    <tr>
                                        <td>
                                            <div class="admin-product-info">
                                                <div class="w-16 h-16 rounded-2xl shimmer"></div>
                                                <div>
                                                    <div class="h-4 w-48 rounded shimmer mb-3"></div>
                                                    <div class="h-3 w-24 rounded shimmer"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td><div class="h-7 w-24 rounded-full shimmer"></div></td>
                                        <td><div class="h-4 w-28 rounded shimmer"></div></td>
                                        <td><div class="h-7 w-24 rounded-full shimmer"></div></td>
                                        <td class="text-right"><div class="h-11 w-36 rounded-2xl shimmer inline-block"></div></td>
                                    </tr>
                                `).join(''));
                            </script>
                        </tbody>
                    </table>
                </div>

            </section>

        </div>
    </main>

    <script>
        const token = localStorage.getItem("token");
        let allProducts = [];

        const packageIconSvg = `
            <svg class="w-7 h-7 text-[#3A5311]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25l-9-5.25-9 5.25m18 0l-9 5.25m9-5.25v7.5l-9 5.25m0-7.5L3 8.25m9 5.25v7.5M3 8.25v7.5l9 5.25"></path>
            </svg>
        `;

        const packagePlaceholder = `
            <div class="admin-product-placeholder">
                ${packageIconSvg}
            </div>
        `;

        function formatStatus(status) {
            if (status === "available") {
                return `
                    <span class="admin-status-pill available">
                        <span></span>
                        Available
                    </span>
                `;
            }

            if (status === "reserved") {
                return `
                    <span class="admin-status-pill reserved">
                        <span></span>
                        Reserved
                    </span>
                `;
            }

            return `
                <span class="admin-status-pill sold">
                    <span></span>
                    Sold Out
                </span>
            `;
        }

        function updateSummary(products) {
            const total = products.length;
            const available = products.filter(item => item.status === "available").length;
            const reserved = products.filter(item => item.status === "reserved").length;
            const sold = products.filter(item => item.status === "sold").length;

            document.getElementById("totalItems").innerText = total;
            document.getElementById("availableItems").innerText = available;
            document.getElementById("reservedItems").innerText = reserved;
            document.getElementById("soldItems").innerText = sold;
        }

        function renderProducts(products) {
            const tableBody = document.getElementById("productTable");
            let html = "";

            if (!products.length) {
                tableBody.innerHTML = `
                    <tr>
                        <td colspan="5">
                            <div class="admin-empty-state">
                                <div class="admin-empty-icon">
                                    ${packageIconSvg}
                                </div>

                                <h3>Produk Tidak Ditemukan</h3>
                                <p>Belum ada produk atau kata kunci pencarian tidak sesuai.</p>

                                <a href="/admin/product/create" class="admin-primary-btn mt-5">
                                    Add Product
                                </a>
                            </div>
                        </td>
                    </tr>
                `;
                return;
            }

            products.forEach(product => {
                const hasImage = product.images && product.images.length > 0;
                const imgUrl = hasImage ? `/storage/${product.images[0].url_gambar}` : null;

                const imageHtml = hasImage
                    ? `<img src="${imgUrl}" alt="${product.nama_produk}">`
                    : packagePlaceholder;

                const formattedPrice = new Intl.NumberFormat("id-ID", {
                    style: "currency",
                    currency: "IDR",
                    minimumFractionDigits: 0
                }).format(product.harga);

                html += `
                    <tr>
                        <td>
                            <div class="admin-product-info">
                                <div class="admin-product-thumb">
                                    ${imageHtml}
                                </div>

                                <div>
                                    <h3>${product.nama_produk}</h3>
                                    <p>ID: #${String(product.id).padStart(5, "0")}</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <span class="admin-category-pill">${product.kategori || "-"}</span>
                        </td>

                        <td>
                            <span class="admin-price-text">${formattedPrice}</span>
                        </td>

                        <td>
                            ${formatStatus(product.status)}
                        </td>

                        <td class="text-right">
                            <select onchange="changeStatus(${product.id}, this.value)" class="admin-status-select">
                                <option value="available" ${product.status === "available" ? "selected" : ""}>Available</option>
                                <option value="reserved" ${product.status === "reserved" ? "selected" : ""}>Reserved</option>
                                <option value="sold" ${product.status === "sold" ? "selected" : ""}>Sold Out</option>
                            </select>
                        </td>
                    </tr>
                `;
            });

            tableBody.innerHTML = html;
        }

        async function loadProducts() {
            const tableBody = document.getElementById("productTable");

            try {
                const response = await fetch("/api/products");
                const result = await response.json();

                allProducts = result.data || [];

                updateSummary(allProducts);
                renderProducts(allProducts);

            } catch (error) {
                console.error("Error loading products:", error);

                tableBody.innerHTML = `
                    <tr>
                        <td colspan="5">
                            <div class="admin-empty-state">
                                <h3 class="text-red-600">Gagal Memuat Produk</h3>
                                <p>Pastikan server API berjalan dan route produk sudah benar.</p>
                            </div>
                        </td>
                    </tr>
                `;
            }
        }

        async function changeStatus(id, status) {
            try {
                const response = await fetch(`/api/admin/products/${id}/status`, {
                    method: "PATCH",
                    headers: {
                        "Authorization": `Bearer ${token}`,
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ status })
                });

                if (!response.ok) {
                    throw new Error("Gagal mengupdate status");
                }

                await loadProducts();

            } catch (error) {
                console.error("Error updating status:", error);
                alert("Gagal merubah status produk. Coba beberapa saat lagi.");
            }
        }

        document.getElementById("productSearch").addEventListener("input", function () {
            const keyword = this.value.toLowerCase();

            const filtered = allProducts.filter(product => {
                return (
                    String(product.nama_produk || "").toLowerCase().includes(keyword) ||
                    String(product.kategori || "").toLowerCase().includes(keyword) ||
                    String(product.status || "").toLowerCase().includes(keyword)
                );
            });

            renderProducts(filtered);
        });

        loadProducts();
    </script>

</body>

</html>