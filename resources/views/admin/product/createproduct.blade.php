<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product | Admin Portal</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-[#FDFBF9] min-h-screen antialiased">

    @include('admin.components.sidebar')

    <main class="ml-72 min-h-screen p-8 md:p-12 flex justify-center items-start">
        <div class="w-full max-w-5xl">
            
            <div class="mb-10">
                <h1 class="text-3xl font-extrabold text-primary tracking-tight">
                    Create New Product
                </h1>
                <p class="text-secondary/70 mt-1 text-sm font-light">
                    Tambahkan koleksi pakaian atau barang preloved baru ke dalam sistem inventori.
                </p>
            </div>

            <div class="bg-white rounded-2xl border border-fourth/40 shadow-[0_10px_30px_rgba(78,52,46,0.02)] p-8 md:p-10">
                <form id="productForm" class="space-y-8">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Product Name</label>
                            <input 
                                type="text"
                                name="nama_produk" 
                                required 
                                placeholder="e.g., Vintage Corduroy Jacket"
                                class="w-full p-4 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary placeholder:text-secondary/40 focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none transition-all duration-200"
                            >
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Category</label>
                            <div class="relative">
                                <select 
                                    name="kategori" 
                                    required
                                    class="w-full p-4 pr-10 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none appearance-none cursor-pointer transition-all duration-200"
                                >
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
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-secondary/50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Size</label>
                            <div class="relative">
                                <select 
                                    name="ukuran" 
                                    required
                                    class="w-full p-4 pr-10 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none appearance-none cursor-pointer transition-all duration-200"
                                >
                                    <option value="" disabled selected>Select Size</option>
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>XXL</option>
                                    <option>All Size</option>
                                </select>
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-secondary/50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Investment Price</label>
                            <div class="relative group">
                                <span class="absolute left-4 top-4 text-sm font-semibold text-secondary/50 group-focus-within:text-accent transition-colors">
                                    Rp
                                </span>
                                <input 
                                    id="harga" 
                                    type="text" 
                                    name="harga" 
                                    required 
                                    placeholder="150.000"
                                    class="w-full pl-12 p-4 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm font-semibold text-primary placeholder:text-secondary/40 focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none transition-all duration-200"
                                >
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Color Palette</label>
                            <input 
                                id="warna" 
                                name="warna" 
                                placeholder="e.g., Earthy Brown, Soft Sage"
                                class="w-full p-4 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary placeholder:text-secondary/40 focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none transition-all duration-200"
                            >
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Item Condition</label>
                            <div class="relative">
                                <select 
                                    name="kondisi" 
                                    required
                                    class="w-full p-4 pr-10 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none appearance-none cursor-pointer transition-all duration-200"
                                >
                                    <option value="" disabled selected>Select Condition</option>
                                    <option value="Like New">Like New (9.5/10)</option>
                                    <option value="Good">Good Condition (8/10)</option>
                                    <option value="Fair">Fair Used (7/10)</option>
                                </select>
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-secondary/50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Condition Notes (Defects)</label>
                        <textarea 
                            name="catatan_kondisi" 
                            rows="2" 
                            placeholder="Sebutkan detail minus jika ada (misal: noda samar di kerah, kancing ganti pelapis)..."
                            class="w-full p-4 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary placeholder:text-secondary/40 focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none transition-all duration-200"
                        ></textarea>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Detailed Description</label>
                        <textarea 
                            name="deskripsi" 
                            rows="4" 
                            required 
                            placeholder="Tuliskan spesifikasi bahan, detail ukuran lingkar dada (LD), panjang baju, dan cerita estetik produk ini..."
                            class="w-full p-4 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary placeholder:text-secondary/40 focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none transition-all duration-200"
                        ></textarea>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-primary/80 tracking-wider uppercase block">Product Gallery Images</label>
                        <label class="group border-2 border-dashed border-fourth/80 hover:border-accent bg-[#FDFBF9]/40 hover:bg-accent/[0.02] rounded-2xl p-8 flex flex-col items-center justify-center cursor-pointer transition-all duration-300">
                            <input 
                                id="gambar" 
                                type="file" 
                                name="gambar[]" 
                                multiple 
                                class="hidden"
                            >
                            <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center border border-fourth/50 shadow-sm text-secondary/60 group-hover:text-accent transition-colors group-hover:scale-105 duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path></svg>
                            </div>
                            <p class="text-xs font-semibold text-primary mt-4 group-hover:text-accent transition-colors">Click to upload catalog assets</p>
                            <p id="fileText" class="text-[11px] text-secondary/50 font-medium mt-1">Saran resolusi gambar persegi 1:1, rasio maksimal 3 file</p>
                        </label>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-4 border-t border-fourth/40">
                        <a href="/admin/product" class="px-5 py-3 rounded-xl border border-fourth/80 text-xs font-bold text-secondary/80 hover:text-primary hover:bg-zinc-50 tracking-wider uppercase transition-colors duration-200">
                            Cancel
                        </a>
                        <button type="submit" id="saveBtn" class="bg-primary text-white px-8 py-3.5 rounded-xl text-xs font-bold tracking-widest uppercase hover:bg-accent hover:-translate-y-0.5 transition-all duration-300 shadow-md hover:shadow-lg active:scale-[0.98] flex items-center gap-2">
                            <span>Publish Product</span>
                            <svg id="spinner" class="animate-spin h-3.5 w-3.5 text-white hidden" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </main>

    <script>
        const token = localStorage.getItem("token");

        /* FORMAT ANGKA HARGA OTOMATIS */
        document.getElementById("harga").addEventListener("input", function(e){
            let value = e.target.value.replace(/\D/g, '');
            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            e.target.value = value;
        });

        /* AUTO CAPITALIZE FORMAT WARNA */
        document.getElementById("warna").addEventListener("input", function(e){
            let words = e.target.value.toLowerCase().split(" ");
            words = words.map(word => word.charAt(0).toUpperCase() + word.slice(1));
            e.target.value = words.join(" ");
        });

        /* FILE COUNT PREVIEW TEXT */
        document.getElementById("gambar").addEventListener("change", function(){
            const fileText = document.getElementById("fileText");
            if(this.files.length > 0) {
                fileText.innerHTML = `✨ <span class="text-accent font-bold">${this.files.length} gambar terpilih</span> untuk diunggah`;
            } else {
                fileText.innerText = "Saran resolusi gambar persegi 1:1, rasio maksimal 3 file";
            }
        });

        /* FORM SUBMIT AJAX REQUEST */
        document.getElementById("productForm").addEventListener("submit", async function(e){
            e.preventDefault();
            
            const btn = document.getElementById("saveBtn");
            const spinner = document.getElementById("spinner");

            // Aktifkan Loading State
            btn.disabled = true;
            btn.classList.add("opacity-80", "cursor-not-allowed");
            spinner.classList.remove("hidden");

            const formData = new FormData(this);
            // Hilangkan pemisah titik harga sebelum dikirim ke API database
            formData.set("harga", document.getElementById("harga").value.replace(/\./g, ''));

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
                
                // Matikan Loading State jika gagal
                btn.disabled = false;
                btn.classList.remove("opacity-80", "cursor-not-allowed");
                spinner.classList.add("hidden");
            }
        });
    </script>
</body>
</html>