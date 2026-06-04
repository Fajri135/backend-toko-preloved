<section id="stock-section" class="bg-[#F4F6F4] py-24 sm:py-28 relative overflow-hidden scroll-mt-20">
    <div class="absolute top-0 right-[-18rem] w-[42rem] h-[42rem] rounded-full bg-[#DDE8D8]/70 blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-[-20rem] left-[-20rem] w-[42rem] h-[42rem] rounded-full bg-white blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 relative z-10">

        <div class="mb-12 flex flex-col lg:flex-row lg:items-end justify-between gap-7">
            <div class="max-w-2xl">
                <p class="section-label">
                    Our Collection
                </p>
                <h2 class="mt-3 editorial-heading text-4xl sm:text-5xl lg:text-6xl uppercase">
                    Popular Products
                </h2>
                <p class="mt-4 text-sm sm:text-base text-[#687568] leading-7 max-w-xl font-medium">
                    Pilih produk preloved sesuai kategori, ukuran, dan warna. Filter akan langsung menyesuaikan daftar produk tanpa perlu reload manual.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <span class="hidden sm:block h-px w-16 bg-[rgba(26,36,26,0.18)]"></span>
                <span class="px-4 py-2 rounded-full bg-white border border-[rgba(26,36,26,0.10)] text-[11px] font-black tracking-[0.16em] uppercase text-[#4A6B4A]">
                    Auto Filter
                </span>
            </div>
        </div>

        <div class="editorial-card rounded-2xl p-4 sm:p-5 lg:p-6 mb-12">
            <form id="filterForm" action="{{ url()->current() }}" method="GET" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 items-end">

                <div class="space-y-2">
                    <label class="text-[11px] font-black text-[#1A241A] tracking-[0.16em] uppercase block">
                        Category
                    </label>
                    <div class="relative">
                        <select name="kategori" class="auto-filter filter-select">
                            <option value="">All Categories</option>
                            @foreach(['T-Shirt', 'Kemeja', 'Blouse', 'Crop Top', 'Hoodie', 'Sweater', 'Cardigan', 'Jaket', 'Kaos', 'Tank Top', 'Tunikan'] as $cat)
                                <option value="{{ $cat }}" {{ request('kategori') == $cat ? 'selected' : '' }}>
                                    {{ $cat }}
                                </option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-[#687568]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-[11px] font-black text-[#1A241A] tracking-[0.16em] uppercase block">
                        Size
                    </label>
                    <div class="relative">
                        <select name="ukuran" class="auto-filter filter-select">
                            <option value="">All Sizes</option>
                            @foreach(['XS', 'S', 'M', 'L', 'XL', 'XXL', 'All Size'] as $sz)
                                <option value="{{ $sz }}" {{ request('ukuran') == $sz ? 'selected' : '' }}>
                                    {{ $sz }}
                                </option>
                            @endforeach
                        </select>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-[#687568]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-[11px] font-black text-[#1A241A] tracking-[0.16em] uppercase block">
                        Color
                    </label>
                    <div class="relative">
                        <select name="warna" class="auto-filter filter-select">
                            <option value="">All Colors</option>
                            @if(isset($availableColors))
                                @foreach($availableColors as $color)
                                    <option value="{{ $color }}" {{ request('warna') == $color ? 'selected' : '' }}>
                                        {{ $color }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none text-[#687568]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div id="resetButtonContainer" class="flex items-end justify-end">
                    @if(request()->hasAny(['kategori', 'ukuran', 'warna']))
                        <button type="button" id="clearFiltersBtn" class="w-full border border-[rgba(26,36,26,0.16)] bg-white text-[#1A241A] py-3.5 px-4 rounded-lg text-[11px] font-black tracking-[0.16em] uppercase hover:bg-[#F4F6F4] transition-all flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.253 8H18"></path>
                            </svg>
                            Clear Filters
                        </button>
                    @else
                        <div class="hidden lg:flex items-center justify-end gap-2 text-[11px] text-[#687568] font-bold tracking-[0.14em] uppercase pb-3">
                            <span class="w-2 h-2 rounded-full bg-[#4A6B4A]"></span>
                            Auto Filtering
                        </div>
                    @endif
                </div>

            </form>
        </div>

        <div id="productContainer" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 transition-all duration-300">

            @fragment('product_list')
                @forelse($products as $product)
                    <article class="product-card group flex flex-col h-full">

                        <div class="relative overflow-hidden aspect-[4/5] bg-[#E9EFE7]">
                            @if($product->images && $product->images->count() > 0)
                                <img
                                    src="{{ asset('storage/' . $product->images->first()->url_gambar) }}"
                                    alt="{{ $product->nama_produk }}"
                                    class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                                >
                            @else
                                <div class="w-full h-full flex items-center justify-center text-[#687568] font-bold text-sm">
                                    No Image Available
                                </div>
                            @endif

                            <div class="absolute inset-0 bg-gradient-to-t from-[#1A241A]/35 via-transparent to-transparent opacity-80"></div>

                            <div class="absolute top-4 left-4 right-4 flex justify-between items-start gap-2 pointer-events-none">
                                <span class="px-3 py-1.5 rounded-full bg-white/88 backdrop-blur-md text-[10px] font-black tracking-[0.14em] text-[#1A241A] uppercase border border-white/60">
                                    {{ $product->status }}
                                </span>

                                <span class="px-3 py-1.5 rounded-full bg-[#3A5311] text-white text-[10px] font-black tracking-[0.12em] uppercase">
                                    {{ $product->ukuran }}
                                </span>
                            </div>

                            <div class="absolute bottom-4 left-4 right-4 flex flex-wrap justify-between items-center gap-2 pointer-events-none">
                                <span class="px-3 py-1.5 rounded-full bg-white/90 backdrop-blur-md text-[10px] font-black tracking-[0.12em] text-[#1A241A] uppercase border border-white/60">
                                    {{ $product->kondisi }}
                                </span>

                                @if($product->warna)
                                    <span class="px-3 py-1.5 rounded-full bg-[#4A6B4A]/90 backdrop-blur-md text-[10px] font-black tracking-[0.12em] text-white uppercase">
                                        {{ $product->warna }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="p-5 sm:p-6 flex flex-col flex-grow">
                            <div class="flex-grow">
                                <p class="text-[10px] font-black tracking-[0.18em] text-[#4A6B4A] uppercase mb-2">
                                    {{ $product->kategori }}
                                </p>

                                <h3 class="text-xl font-black text-[#1A241A] tracking-tight leading-snug line-clamp-1 group-hover:text-[#4A6B4A] transition-colors">
                                    {{ $product->nama_produk }}
                                </h3>

                                <p class="text-[#687568] text-sm mt-2 line-clamp-2 leading-6 font-medium">
                                    {{ $product->deskripsi }}
                                </p>
                            </div>

                            <div class="mt-6 pt-5 border-t border-[rgba(26,36,26,0.08)] flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-[10px] font-black uppercase tracking-[0.16em] text-[#687568]">
                                        Price
                                    </p>
                                    <h4 class="text-xl font-black text-[#1A241A]">
                                        Rp{{ number_format($product->harga, 0, ',', '.') }}
                                    </h4>
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

                                <a href="{{ $waUrl }}" target="_blank" class="btn-primary !px-4 !py-3 !text-[10px]">
                                    Order
                                </a>
                            </div>
                        </div>

                    </article>
                @empty
                    <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-dashed border-[rgba(26,36,26,0.16)] p-8">
                        <div class="mx-auto w-14 h-14 rounded-full bg-[#F4F6F4] flex items-center justify-center text-2xl">
                            🧥
                        </div>
                        <h3 class="text-xl font-black text-[#1A241A] mt-5">
                            No Products Found
                        </h3>
                        <p class="text-sm text-[#687568] mt-2">
                            Coba ubah kombinasi filter atau reset semua filter.
                        </p>
                        <button type="button" id="innerResetBtn" class="mt-5 inline-flex text-[11px] font-black text-[#4A6B4A] tracking-[0.16em] uppercase border-b border-[#4A6B4A] pb-1 hover:text-[#1A241A] hover:border-[#1A241A] transition-colors">
                            Clear All Filters
                        </button>
                    </div>
                @endforelse
            @endfragment

        </div>

    </div>
</section>