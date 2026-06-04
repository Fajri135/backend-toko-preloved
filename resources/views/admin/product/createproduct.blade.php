<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product | Admin</title>

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

            <div class="admin-create-hero">
                <div>
                    <div class="admin-page-tag">
                        <span></span>
                        Inventory Setup
                    </div>

                    <h1 class="admin-create-title">
                        Create Product
                    </h1>

                    <p class="admin-create-subtitle">
                        Tambahkan koleksi preloved baru dengan detail produk yang rapi, jelas, dan siap tampil di katalog toko.
                    </p>
                </div>

                <div class="admin-create-actions">
                    <a href="/admin/product" class="admin-secondary-btn">
                        Back to Products
                    </a>
                </div>
            </div>

            <form id="productForm" class="admin-create-layout">

                <section class="admin-create-main">

                    <div class="admin-create-card">
                        <div class="admin-create-card-head">
                            <div>
                                <p class="admin-kicker">Product Information</p>
                                <h2>Basic Details</h2>
                            </div>

                            <span class="admin-create-number">01</span>
                        </div>

                        <div class="admin-create-grid">
                            <div class="admin-field admin-field-wide">
                                <label>Product Name</label>
                                <input type="text" name="nama_produk" required placeholder="Contoh: Baju Preloved Vintage">
                            </div>

                            <div class="admin-field">
                                <label>Category</label>
                                <select name="kategori" required>
                                    <option value="" disabled selected>Pilih Kategori</option>
                                    <option value="T-Shirt">T-Shirt</option>
                                    <option value="Kemeja">Kemeja</option>
                                    <option value="Blouse">Blouse</option>
                                    <option value="Crop Top">Crop Top</option>
                                    <option value="Hoodie">Hoodie</option>
                                    <option value="Sweater">Sweater</option>
                                    <option value="Cardigan">Cardigan</option>
                                    <option value="Jaket">Jaket</option>
                                    <option value="Kaos">Kaos</option>
                                    <option value="Tank Top">Tank Top</option>
                                    <option value="Tunikan">Tunikan</option>
                                </select>
                            </div>

                            <div class="admin-field">
                                <label>Size</label>
                                <select name="ukuran" required>
                                    <option value="" disabled selected>Select Size</option>
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>XXL</option>
                                    <option>All Size</option>
                                </select>
                            </div>

                            <div class="admin-field">
                                <label>Price</label>
                                <div class="admin-price-field">
                                    <span>Rp</span>
                                    <input id="harga" type="text" name="harga" required placeholder="150.000">
                                </div>
                            </div>

                            <div class="admin-field">
                                <label>Color</label>
                                <input id="warna" name="warna" placeholder="Contoh: Sage Green">
                            </div>

                            <div class="admin-field">
                                <label>Condition</label>
                                <select name="kondisi" required>
                                    <option value="" disabled selected>Select Condition</option>
                                    <option value="Like New">Like New</option>
                                    <option value="Good">Good</option>
                                    <option value="Fair">Fair</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="admin-create-card">
                        <div class="admin-create-card-head">
                            <div>
                                <p class="admin-kicker">Description</p>
                                <h2>Product Story</h2>
                            </div>

                            <span class="admin-create-number">02</span>
                        </div>

                        <div class="admin-create-stack">
                            <div class="admin-field">
                                <label>Condition Notes</label>
                                <textarea name="catatan_kondisi" rows="3" placeholder="Contoh: Warna masih pekat, ada sedikit noda kecil di bagian lengan."></textarea>
                            </div>

                            <div class="admin-field">
                                <label>Detailed Description</label>
                                <textarea name="deskripsi" rows="5" required placeholder="Tuliskan bahan, ukuran detail, style, dan informasi penting lainnya."></textarea>
                            </div>
                        </div>
                    </div>

                </section>

                <aside class="admin-create-side">

                    <div class="admin-create-card admin-create-sticky">
                        <div class="admin-create-card-head">
                            <div>
                                <p class="admin-kicker">Gallery</p>
                                <h2>Images</h2>
                            </div>

                            <span class="admin-create-number">03</span>
                        </div>

                        <label class="admin-upload-modern">
                            <input id="gambar" type="file" name="gambar[]" multiple class="hidden">

                            <div class="admin-upload-modern-icon">
                                <svg fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25l-9-5.25-9 5.25m18 0l-9 5.25m9-5.25v7.5l-9 5.25m0-7.5L3 8.25m9 5.25v7.5M3 8.25v7.5l9 5.25"></path>
                                </svg>
                            </div>

                            <p>Upload product images</p>
                            <span id="fileText">Klik area ini untuk memilih gambar produk.</span>
                        </label>

                        <div class="admin-create-note">
                            <h3>Upload Tips</h3>

                            <ul>
                                <li>Gunakan foto produk yang jelas.</li>
                                <li>Ambil gambar depan dan detail bahan.</li>
                                <li>Pastikan file tidak terlalu besar.</li>
                            </ul>
                        </div>

                        <div class="admin-create-submit">
                            <button type="submit" id="saveBtn" class="admin-primary-btn w-full">
                                <span>Publish Product</span>

                                <svg id="spinner" class="animate-spin h-4 w-4 text-white hidden" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                                </svg>
                            </button>

                            <a href="/admin/product" class="admin-secondary-btn w-full">
                                Cancel
                            </a>
                        </div>
                    </div>

                </aside>

            </form>

        </div>
    </main>

    <script>
        const token = localStorage.getItem("token");

        document.getElementById("harga").addEventListener("input", function(e) {
            let value = e.target.value.replace(/\D/g, "");
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            e.target.value = value;
        });

        document.getElementById("warna").addEventListener("input", function(e) {
            let words = e.target.value.toLowerCase().split(" ");
            words = words.map(word => word.charAt(0).toUpperCase() + word.slice(1));
            e.target.value = words.join(" ");
        });

        document.getElementById("gambar").addEventListener("change", function() {
            const fileText = document.getElementById("fileText");

            if (this.files.length > 0) {
                fileText.innerHTML = `${this.files.length} gambar terpilih untuk diunggah`;
            } else {
                fileText.innerText = "Klik area ini untuk memilih gambar produk.";
            }
        });

        document.getElementById("productForm").addEventListener("submit", async function(e) {
            e.preventDefault();

            const btn = document.getElementById("saveBtn");
            const spinner = document.getElementById("spinner");

            btn.disabled = true;
            btn.classList.add("opacity-80", "cursor-not-allowed");
            spinner.classList.remove("hidden");

            const formData = new FormData(this);
            formData.set("harga", document.getElementById("harga").value.replace(/\./g, ""));

            try {
                const response = await fetch("/api/admin/products", {
                    method: "POST",
                    headers: {
                        "Authorization": `Bearer ${token}`
                    },
                    body: formData
                });

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.message || "Gagal memproses data produk baru.");
                }

                window.location.href = "/admin/product";
            } catch (err) {
                alert(err.message);

                btn.disabled = false;
                btn.classList.remove("opacity-80", "cursor-not-allowed");
                spinner.classList.add("hidden");
            }
        });
    </script>

</body>

</html>