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

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Animasi kustom untuk skeleton loading */
        .shimmer {
            background: linear-gradient(90deg, #f3f4f6 25%, #e5e7eb 50%, #f3f4f6 75%);
            background-size: 200% 100%;
            animation: loading-shimmer 1.5s infinite;
        }
        @keyframes loading-shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
    </style>
</head>

<body class="bg-[#FDFBF9] min-h-screen antialiased">

    @include('admin.components.sidebar')

    <!-- Layout utama disesuaikan margin-nya dengan lebar sidebar modern -->
    <main class="ml-72 min-h-screen p-8 lg:p-12 transition-all duration-300">

        <!-- HEADER SECTION -->
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-10 gap-6">
            <div>
                <h1 class="text-3xl font-extrabold text-primary tracking-tight">
                    Products Inventory
                </h1>
                <p class="text-secondary/70 mt-1 text-sm font-light">
                    Kelola, pantau, dan perbarui stok produk preloved Anda di sini.
                </p>
            </div>

            <!-- Tombol Tambah Produk dengan Icon Minimalis -->
            <a href="/admin/product/create" class="inline-flex items-center gap-2 bg-primary text-white px-5 py-3.5 rounded-xl text-xs font-bold tracking-wider uppercase hover:bg-accent hover:-translate-y-0.5 transition-all duration-300 shadow-md hover:shadow-lg active:scale-[0.98]">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"></path>
                </svg>
                <span>Add New Product</span>
            </a>
        </div>

        <!-- TABLE CARD BLOCK -->
        <div class="bg-white rounded-2xl border border-fourth/40 shadow-[0_10px_30px_rgba(78,52,46,0.02)] overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-zinc-50/70 border-b border-fourth/60">
                            <th class="p-5 text-[11px] font-bold uppercase tracking-widest text-secondary/60">Image</th>
                            <th class="p-5 text-[11px] font-bold uppercase tracking-widest text-secondary/60">Product Details</th>
                            <th class="p-5 text-[11px] font-bold uppercase tracking-widest text-secondary/60">Category</th>
                            <th class="p-5 text-[11px] font-bold uppercase tracking-widest text-secondary/60">Investment Price</th>
                            <th class="p-5 text-[11px] font-bold uppercase tracking-widest text-secondary/60">Status</th>
                            <th class="p-5 text-[11px] font-bold uppercase tracking-widest text-secondary/60 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="productTable" class="divide-y divide-fourth/30">
                        <!-- State Awal: Menampilkan Skeleton Loader Berdenyut yang Sangat Premium -->
                        <script>
                            document.write(Array(3).fill().map(() => `
                                <tr>
                                    <td class="p-5"><div class="w-14 h-14 rounded-xl shimmer"></div></td>
                                    <td class="p-5"><div class="h-4 w-48 rounded shimmer mb-2"></div><div class="h-3 w-24 rounded shimmer"></div></td>
                                    <td class="p-5"><div class="h-4 w-20 rounded shimmer"></div></td>
                                    <td class="p-5"><div class="h-4 w-28 rounded shimmer"></div></td>
                                    <td class="p-5"><div class="h-6 w-24 rounded-full shimmer"></div></td>
                                    <td class="p-5 text-right"><div class="h-9 w-32 rounded-lg shimmer inline-block"></div></td>
                                </tr>
                            `).join(''));
                        </script>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- SCRIPT LOGIKA UTAMA -->
    <script>
        const token = localStorage.getItem("token");

        async function loadProducts() {
            try {
                const response = await fetch("/api/products");
                const result = await response.json();
                const products = result.data;

                const tableBody = document.getElementById("productTable");
                let html = "";

                if (!products || products.length === 0) {
                    html = `
                        <tr>
                            <td colspan="6" class="p-16 text-center">
                                <div class="max-w-sm mx-auto">
                                    <span class="text-3xl">🧥</span>
                                    <h3 class="text-sm font-bold text-primary mt-4">Belum Ada Produk</h3>
                                    <p class="text-xs text-secondary/60 mt-1">Katalog item preloved Anda masih kosong. Mulai tambahkan koleksi pertama Anda sekarang.</p>
                                </div>
                            </td>
                        </tr>`;
                } else {
                    products.forEach(product => {
                        // Jalur URL Gambar
                        const imgUrl = product.images && product.images.length > 0 
                            ? `/storage/${product.images[0].url_gambar}` 
                            : 'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=256&auto=format&fit=crop';
                        
                        // Format Angka Rupiah
                        const formattedPrice = new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR',
                            minimumFractionDigits: 0
                        }).format(product.harga);

                        // Komponen Status Badge dengan glowing indicator mini
                        let statusBadge = '';
                        if (product.status === 'available') {
                            statusBadge = `
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-semibold border border-emerald-200/50">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                                    Available
                                </span>`;
                        } else if (product.status === 'reserved') {
                            statusBadge = `
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-amber-50 text-amber-700 text-xs font-semibold border border-amber-200/50">
                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                    Reserved
                                </span>`;
                        } else if (product.status === 'sold') {
                            statusBadge = `
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-zinc-100 text-zinc-500 text-xs font-medium border border-zinc-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-400"></span>
                                    Sold Out
                                </span>`;
                        }

                        html += `
                            <tr class="hover:bg-zinc-50/50 transition-colors duration-200">
                                <td class="p-5">
                                    <div class="relative w-14 h-14 rounded-xl overflow-hidden border border-fourth/30 bg-light">
                                        <img src="${imgUrl}" alt="${product.nama_produk}" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="p-5">
                                    <div class="flex flex-col">
                                        <span class="font-bold text-primary tracking-tight text-sm hover:text-accent transition-colors cursor-pointer">${product.nama_produk}</span>
                                        <span class="text-[11px] text-secondary/40 font-mono mt-0.5">ID: #${String(product.id).padStart(5, '0')}</span>
                                    </div>
                                </td>
                                <td class="p-5">
                                    <span class="text-xs font-medium text-secondary/80 bg-zinc-100 px-2.5 py-1 rounded-md border border-zinc-200/40">${product.kategori}</span>
                                </td>
                                <td class="p-5">
                                    <span class="font-extrabold text-primary text-sm">${formattedPrice}</span>
                                </td>
                                <td class="p-5">${statusBadge}</td>
                                <td class="p-5 text-right">
                                    <!-- Custom Dropdown Selector -->
                                    <div class="relative inline-block text-left">
                                        <select 
                                            onchange="changeStatus(${product.id}, this.value)"
                                            class="w-36 p-2.5 pr-8 rounded-xl border border-fourth/80 bg-white text-xs font-semibold text-primary focus:border-accent focus:ring-4 focus:ring-accent/10 outline-none cursor-pointer appearance-none transition-all duration-200 shadow-sm"
                                        >
                                            <option value="available" ${product.status === 'available' ? 'selected' : ''}>Set Available</option>
                                            <option value="reserved" ${product.status === 'reserved' ? 'selected' : ''}>Set Reserved</option>
                                            <option value="sold" ${product.status === 'sold' ? 'selected' : ''}>Set Sold Out</option>
                                        </select>
                                        <!-- Custom Dropdown Down-Arrow Icon -->
                                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-secondary/50">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                }

                tableBody.innerHTML = html;
            } catch (error) {
                console.error("Error loading products:", error);
                document.getElementById("productTable").innerHTML = `
                    <tr>
                        <td colspan="6" class="p-10 text-center text-red-500 font-medium text-xs">
                            ⚠️ Gagal memuat data inventori produk. Pastikan koneksi API berjalan lancar.
                        </td>
                    </tr>`;
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

                if(!response.ok) throw new Error("Gagal mengupdate status");
                
                // Panggil ulang data untuk merefresh visual badge terbaru
                loadProducts();
            } catch (error) {
                console.error("Error updating status:", error);
                alert("Gagal merubah status produk. Coba beberapa saat lagi.");
            }
        }

        // Jalankan fungsi saat DOM terarsip penuh
        loadProducts();
    </script>
</body>
</html>