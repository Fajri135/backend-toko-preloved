<nav class="fixed top-0 left-0 w-full border-b border-[#4E342E]/5 z-50 transition-all duration-300 bg-white/80 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="h-20 flex items-center justify-between">

            <a href="/login" class="flex items-center gap-3.5 group cursor-pointer select-none">
                <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center shadow-md shadow-[#4E342E]/10 group-hover:bg-accent group-hover:shadow-lg group-hover:scale-[1.04] transition-all duration-300">
                    <span class="text-white font-serif font-bold text-xl tracking-tight">P</span>
                </div>
                <div class="hidden sm:block">
                    <h1 class="font-extrabold text-lg tracking-widest text-primary font-sans leading-none group-hover:text-accent transition-colors duration-300">
                        PRELOVED
                    </h1>
                    <p class="text-[9px] text-accent font-bold tracking-[0.25em] uppercase mt-1 group-hover:text-primary transition-colors duration-300">
                        Luxury Store
                    </p>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-9 font-semibold text-secondary">
                <a href="/" class="text-sm tracking-wide text-secondary/70 hover:text-primary transition-colors relative py-2 group">
                    <span>Home</span>
                    <span class="absolute bottom-0 left-1/2 w-0 h-[2px] bg-accent transition-all duration-300 -translate-x-1/2 group-hover:w-8"></span>
                </a>
                
                <a href="#stock-section" class="text-sm tracking-wide text-primary relative py-2 group">
                    <span>Stock</span>
                    <span class="absolute bottom-0 left-1/2 h-[2px] bg-accent -translate-x-1/2 w-8"></span>
                </a>
            </div>

            <div class="hidden md:flex items-center gap-4">
                <a href="#stock-section" class="btn-accent px-6 py-3 rounded-xl text-xs font-bold tracking-wider uppercase shadow-sm block hover:bg-primary hover:text-white hover:-translate-y-0.5 active:translate-y-0 transition-all duration-300">
                    Browse Products
                </a>
            </div>

            <div class="flex items-center md:hidden">
                <button id="mobileMenuBtn" type="button" class="text-primary hover:text-accent p-2 rounded-xl focus:outline-none transition-colors" aria-label="Toggle Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path id="hamburgerIcon" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <div id="mobileMenuDrawer" class="hidden md:hidden border-t border-[#4E342E]/5 bg-white/95 backdrop-blur-md transition-all duration-300 opacity-0 transform -translate-y-4">
        <div class="px-4 pt-4 pb-6 space-y-3 shadow-lg">
            <a href="/" class="block px-4 py-3 rounded-xl text-sm font-semibold text-secondary hover:bg-[#FDFBF9] hover:text-primary transition-all">
                Home
            </a>
            <a href="#stock-section" id="mobileStockLink" class="block px-4 py-3 rounded-xl text-sm font-bold bg-accent/10 text-primary transition-all">
                Stock
            </a>
            <div class="pt-2">
                <a href="#stock-section" id="mobileBrowseLink" class="btn-accent w-full py-3.5 rounded-xl text-xs font-bold tracking-wider uppercase shadow-sm block text-center">
                    Browse Products
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="h-20"></div>


<section id="stock-section" class="bg-light py-24 relative overflow-hidden scroll-mt-20">
    
    <div class="absolute top-1/4 right-[-10%] w-[500px] h-[500px] rounded-full bg-gradient-to-br from-[#C7B299]/10 to-transparent blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

        <div class="mb-12 flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <p class="text-accent font-bold tracking-[0.2em] text-xs uppercase">
                    OUR COLLECTION
                </p>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-serif font-extrabold text-primary mt-2">
                    Popular Products
                </h2>
            </div>
            <div class="h-[2px] w-20 bg-accent rounded-full hidden md:block mb-3"></div>
        </div>

        <div class="bg-white rounded-[24px] p-6 mb-12 shadow-[0_10px_25px_rgba(78,52,46,0.03)] border border-[#4E342E]/5">
            <form id="filterForm" action="{{ url()->current() }}" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 items-end">
                
                <div class="space-y-2">
                    <label class="text-xs font-bold text-primary tracking-wider uppercase block">Category</label>
                    <div class="relative">
                        <select name="kategori" class="auto-filter w-full p-3.5 pr-10 rounded-xl border border-fourth bg-white text-sm text-secondary focus:border-accent focus:ring-1 focus:ring-accent/20 outline-none appearance-none transition-all cursor-pointer">
                            <option value="">All Categories</option>
                            @foreach(['T-Shirt', 'Kemeja', 'Blouse', 'Crop Top', 'Hoodie', 'Sweater', 'Cardigan', 'Jaket', 'Kaos', 'Tank Top', 'Tunikan'] as $cat)
                                <option value="{{ $cat }}" {{ request('kategori') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-secondary/50">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-primary tracking-wider uppercase block">Size</label>
                    <div class="relative">
                        <select name="ukuran" class="auto-filter w-full p-3.5 pr-10 rounded-xl border border-fourth bg-white text-sm text-secondary focus:border-accent focus:ring-1 focus:ring-accent/20 outline-none appearance-none transition-all cursor-pointer">
                            <option value="">All Sizes</option>
                            @foreach(['XS', 'S', 'M', 'L', 'XL', 'XXL', 'All Size'] as $sz)
                                <option value="{{ $sz }}" {{ request('ukuran') == $sz ? 'selected' : '' }}>{{ $sz }}</option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-secondary/50">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-xs font-bold text-primary tracking-wider uppercase block">Color</label>
                    <div class="relative">
                        <select name="warna" class="auto-filter w-full p-3.5 pr-10 rounded-xl border border-fourth bg-white text-sm text-secondary focus:border-accent focus:ring-1 focus:ring-accent/20 outline-none appearance-none transition-all cursor-pointer">
                            <option value="">All Colors</option>
                            @if(isset($availableColors))
                                @foreach($availableColors as $color)
                                    <option value="{{ $color }}" {{ request('warna') == $color ? 'selected' : '' }}>{{ $color }}</option>
                                @endforeach
                            @endif
                        </select>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-secondary/50">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-end" id="resetButtonContainer">
                    @if(request()->hasAny(['kategori', 'ukuran', 'warna']))
                        <button type="button" id="clearFiltersBtn" class="w-full bg-fourth/20 text-primary py-3.5 px-4 rounded-xl text-xs font-bold tracking-wider uppercase hover:bg-fourth/40 transition-all flex items-center justify-center gap-2" title="Reset Filters">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.253 8H18"></path></svg>
                            Clear Filters
                        </button>
                    @else
                        <div class="text-xs text-secondary/40 font-medium italic pb-2 hidden lg:block">
                            ✨ Auto-filtering enabled
                        </div>
                    @endif
                </div>

            </form>
        </div>

        <div id="productContainer" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10 transition-opacity duration-200">

            @fragment('product_list')
                @forelse($products as $product)
                <div class="bg-white rounded-[24px] overflow-hidden shadow-[0_15px_30px_rgba(78,52,46,0.05)] border border-transparent hover:border-accent/10 hover:-translate-y-2 transition-all duration-300 group flex flex-col h-full">

                    <div class="relative overflow-hidden aspect-[4/5] bg-fourth/20">
                        @if($product->images && $product->images->count() > 0)
                            <img 
                                src="{{ asset('storage/' . $product->images->first()->url_gambar) }}" 
                                alt="{{ $product->nama_produk }}"
                                class="w-full h-full object-cover transform scale-100 group-hover:scale-105 transition-transform duration-700 ease-out"
                            >
                        @else
                            <div class="w-full h-full flex items-center justify-center text-secondary/40 font-medium text-sm">
                                No Image Available
                            </div>
                        @endif

                        <div class="absolute top-4 left-4 right-4 flex justify-between items-center pointer-events-none">
                            <span class="glass px-3.5 py-1.5 rounded-full text-[10px] font-bold tracking-wider text-primary uppercase shadow-sm border border-white/60">
                                {{ $product->status }}
                            </span>
                            <span class="bg-primary text-white px-3 py-1 rounded-lg text-xs font-bold shadow-sm">
                                Size: {{ $product->ukuran }}
                            </span>
                        </div>

                        <div class="absolute bottom-4 left-4 right-4 flex justify-between items-center pointer-events-none">
                            <span class="bg-accent text-white px-3 py-1 rounded-md text-[11px] font-semibold tracking-wide shadow-sm">
                                ✨ {{ $product->kondisi }}
                            </span>
                            @if($product->warna)
                                <span class="glass px-2.5 py-1 rounded-md text-[10px] font-medium text-primary shadow-sm border border-white/40">
                                    🎨 {{ $product->warna }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow justify-between">
                        <div>
                            <p class="text-[11px] font-bold tracking-widest text-secondary/60 uppercase mb-1">
                                {{ $product->kategori }}
                            </p>
                            <h3 class="text-xl font-bold text-primary tracking-tight line-clamp-1 group-hover:text-accent transition-colors">
                                {{ $product->nama_produk }}
                            </h3>
                            <p class="text-secondary text-sm mt-2 line-clamp-2 font-light leading-relaxed">
                                {{ $product->deskripsi }}
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-6 pt-4 border-t border-[#4E342E]/5">
                            <div>
                                <p class="text-secondary/60 text-[10px] font-bold uppercase tracking-wider">Investment</p>
                                <h4 class="text-xl font-extrabold text-primary">Rp{{ number_format($product->harga, 0, ',', '.') }}</h4>
                            </div>

                            @php
                                $textMessage = "Halo Admin Toko Preloved, saya tertarik dengan:\n"
                                             . "Produk: *{$product->nama_produk}*\n"
                                             . "Kategori: {$product->kategori}\n"
                                             . "Ukuran: {$product->ukuran}\n"
                                             . "Warna: " . ($product->warna ?? '-') . "\n"
                                             . "Harga: Rp" . number_format($product->harga, 0, ',', '.') . "\n\n"
                                             . "Apakah barang ini masih tersedia?";
                                $waUrl = "https://wa.me/6285176970505?text=" . rawurlencode($textMessage);
                            @endphp

                            <a href="{{ $waUrl }}" target="_blank" class="btn-accent px-5 py-3 rounded-xl font-bold text-xs tracking-wider uppercase text-center flex items-center gap-2">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.713-1.457L0 24zm6.59-3.573c1.6.95 3.393 1.452 5.222 1.453 5.4 0 9.792-4.393 9.795-9.798.002-2.618-1.011-5.08-2.859-6.93C16.805 3.303 14.347 2.29 11.79 2.29c-5.404 0-9.8 4.394-9.803 9.8-.001 1.87.493 3.702 1.432 5.316l-.995 3.637 3.723-.976zm11.332-6.195c-.3-.15-1.774-.875-2.049-.974-.276-.1-.476-.15-.676.15-.2.3-.775.974-.95 1.174-.175.2-.35.226-.65.075-1.023-.513-1.696-.967-2.225-1.874-.188-.32.188-.297.54-.997.102-.2.051-.376-.025-.526-.076-.15-.676-1.63-1.026-2.476-.276-.664-.551-.57-.751-.58h-.626c-.2 0-.526.075-.801.376-.275.301-1.05 1.027-1.05 2.505 0 1.478 1.076 2.906 1.225 3.107.15.2 2.117 3.232 5.128 4.534.717.311 1.276.496 1.712.635.72.229 1.375.196 1.893.119.577-.088 1.774-.726 2.025-1.43.25-.702.25-1.303.175-1.428-.075-.126-.275-.201-.575-.351z"/>
                                </svg>
                                Order
                            </a>
                        </div>
                    </div>

                </div>
                @empty
                <div class="col-span-full text-center py-16 bg-white rounded-[24px] border border-dashed border-fourth p-8">
                    <span class="text-4xl">🧥</span>
                    <h3 class="text-lg font-bold text-primary mt-4">No Products Found</h3>
                    <p class="text-sm text-secondary/70 mt-1">Try to adjust your filter combinations or reset them.</p>
                    <button type="button" id="innerResetBtn" class="mt-4 inline-block text-xs font-bold text-accent tracking-wider uppercase border-b border-accent pb-0.5 hover:text-primary hover:border-primary transition-colors">Clear All Filters</button>
                </div>
                @endforelse
            @endfragment

        </div>

    </div>
</section>


<script>
document.addEventListener("DOMContentLoaded", function () {
    
    // --- PART A: MOBILE NAV MENU DRAWER CONTROL ---
    const menuBtn = document.getElementById("mobileMenuBtn");
    const menuDrawer = document.getElementById("mobileMenuDrawer");
    const hamburgerIcon = document.getElementById("hamburgerIcon");
    const mobileLinks = [
        document.getElementById("mobileStockLink"),
        document.getElementById("mobileBrowseLink")
    ];

    function toggleMenu() {
        const isHidden = menuDrawer.classList.contains("hidden");
        if (isHidden) {
            menuDrawer.classList.remove("hidden");
            setTimeout(() => {
                menuDrawer.classList.remove("opacity-0", "-translate-y-4");
                menuDrawer.classList.add("opacity-100", "translate-y-0");
            }, 10);
            hamburgerIcon.setAttribute("d", "M6 18L18 6M6 6l12 12");
        } else {
            menuDrawer.classList.remove("opacity-100", "translate-y-0");
            menuDrawer.classList.add("opacity-0", "-translate-y-4");
            setTimeout(() => { menuDrawer.classList.add("hidden"); }, 300);
            hamburgerIcon.setAttribute("d", "M4 6h16M4 12h16M4 18h16");
        }
    }

    menuBtn.addEventListener("click", toggleMenu);
    
    // Otomatis tutup drawer menu jika link seksi stock di-klik pada perangkat mobile
    mobileLinks.forEach(link => {
        if(link) {
            link.addEventListener("click", function() {
                if(!menuDrawer.classList.contains("hidden")) {
                    toggleMenu();
                }
            });
        }
    });


    // --- PART B: AJAX AUTO FILTERING FOR PRODUCTS ---
    const filterForm = document.getElementById("filterForm");
    const autoFilters = document.querySelectorAll(".auto-filter");
    const productContainer = document.getElementById("productContainer");
    const resetButtonContainer = document.getElementById("resetButtonContainer");

    function applyFilter() {
        productContainer.style.opacity = "0.5";

        const formData = new FormData(filterForm);
        const queryParams = new URLSearchParams(formData).toString();
        const requestUrl = `${filterForm.action}?${queryParams}`;

        fetch(requestUrl, {
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        })
        .then(response => response.text())
        .then(htmlContent => {
            productContainer.innerHTML = htmlContent;
            productContainer.style.opacity = "1";
            updateResetButtonVisibility();
            window.history.pushState({}, '', requestUrl);
        })
        .catch(error => {
            console.error("Gagal memuat produk via AJAX:", error);
            productContainer.style.opacity = "1";
        });
    }

    autoFilters.forEach(element => {
        element.addEventListener("change", applyFilter);
    });

    function updateResetButtonVisibility() {
        let isAnyFilterActive = false;
        autoFilters.forEach(select => {
            if (select.value !== "") isAnyFilterActive = true;
        });

        if (isAnyFilterActive) {
            resetButtonContainer.innerHTML = `
                <button type="button" id="clearFiltersBtn" class="w-full bg-fourth/20 text-primary py-3.5 px-4 rounded-xl text-xs font-bold tracking-wider uppercase hover:bg-fourth/40 transition-all flex items-center justify-center gap-2" title="Reset Filters">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.253 8H18"></path></svg>
                    Clear Filters
                </button>
            `;
        } else {
            resetButtonContainer.innerHTML = `
                <div class="text-xs text-secondary/40 font-medium italic pb-2 hidden lg:block">
                    ✨ Auto-filtering enabled
                </div>
            `;
        }
    }

    document.addEventListener("click", function (event) {
        if (event.target && (event.target.id === "clearFiltersBtn" || event.target.id === "innerResetBtn" || event.target.closest("#clearFiltersBtn"))) {
            event.preventDefault();
            filterForm.reset();
            autoFilters.forEach(select => select.value = "");
            applyFilter();
        }
    });
});
</script>