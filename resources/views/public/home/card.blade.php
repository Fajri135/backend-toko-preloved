<section id="stock-section" class="relative bg-[#F4F6F4] py-24 sm:py-28 scroll-mt-24 overflow-hidden">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,rgba(26,36,26,0.025)_1px,transparent_1px),linear-gradient(to_bottom,rgba(26,36,26,0.025)_1px,transparent_1px)] bg-[size:72px_72px] pointer-events-none"></div>

    @php
        $totalProducts = method_exists($products, 'total') ? $products->total() : $products->count();
        $activeFilterCount = collect(['kategori', 'ukuran', 'warna'])->filter(fn($key) => request($key))->count();
    @endphp

    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10 relative z-10">

        {{-- HEADER --}}
        <div class="mb-10 border-b border-[#1A241A]/10 pb-8">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
                <div>
                    <p class="text-[11px] font-black uppercase tracking-[0.22em] text-[#4A6B4A]">
                        Collection
                    </p>

                    <h2 class="mt-3 text-[#1A241A] font-black uppercase tracking-[-0.055em] leading-[0.95] text-4xl sm:text-5xl lg:text-6xl">
                        Products
                    </h2>
                </div>

                <div class="max-w-md lg:text-right">
                    <p class="mt-3 text-[11px] font-black uppercase tracking-[0.18em] text-[#1A241A]">
                        {{ $totalProducts }} Items Available
                    </p>
                </div>
            </div>
        </div>

        {{-- CUSTOM FILTER BAR --}}
        <div class="mb-12 relative z-[80]">
            <form id="filterForm" action="{{ url()->current() }}" method="GET" class="pro-filter-wrap">
                <input type="hidden" name="kategori" id="hiddenKategori" value="{{ request('kategori') }}">
                <input type="hidden" name="ukuran" id="hiddenUkuran" value="{{ request('ukuran') }}">
                <input type="hidden" name="warna" id="hiddenWarna" value="{{ request('warna') }}">

                <div class="pro-filter-grid">

                    {{-- CATEGORY --}}
                    <div class="pro-filter-box" data-filter-box>
                        <p class="pro-filter-label">Category</p>

                        <button type="button" class="pro-filter-trigger" data-filter-trigger>
                            <span data-filter-text>{{ request('kategori') ?: 'All Categories' }}</span>
                            <svg class="pro-filter-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div class="pro-filter-menu" data-filter-menu>
                            <button type="button"
                                class="pro-filter-option {{ request('kategori') == '' ? 'active' : '' }}"
                                data-target="hiddenKategori"
                                data-value=""
                                data-label="All Categories">
                                All Categories
                            </button>

                            @foreach(['T-Shirt', 'Kemeja', 'Blouse', 'Crop Top', 'Hoodie', 'Sweater', 'Cardigan', 'Jaket', 'Kaos', 'Tank Top', 'Tunikan'] as $cat)
                                <button type="button"
                                    class="pro-filter-option {{ request('kategori') == $cat ? 'active' : '' }}"
                                    data-target="hiddenKategori"
                                    data-value="{{ $cat }}"
                                    data-label="{{ $cat }}">
                                    {{ $cat }}
                                </button>
                            @endforeach
                        </div>
                    </div>

                    {{-- SIZE --}}
                    <div class="pro-filter-box" data-filter-box>
                        <p class="pro-filter-label">Size</p>

                        <button type="button" class="pro-filter-trigger" data-filter-trigger>
                            <span data-filter-text>{{ request('ukuran') ?: 'All Sizes' }}</span>
                            <svg class="pro-filter-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div class="pro-filter-menu" data-filter-menu>
                            <button type="button"
                                class="pro-filter-option {{ request('ukuran') == '' ? 'active' : '' }}"
                                data-target="hiddenUkuran"
                                data-value=""
                                data-label="All Sizes">
                                All Sizes
                            </button>

                            @foreach(['XS', 'S', 'M', 'L', 'XL', 'XXL', 'All Size'] as $sz)
                                <button type="button"
                                    class="pro-filter-option {{ request('ukuran') == $sz ? 'active' : '' }}"
                                    data-target="hiddenUkuran"
                                    data-value="{{ $sz }}"
                                    data-label="{{ $sz }}">
                                    {{ $sz }}
                                </button>
                            @endforeach
                        </div>
                    </div>

                    {{-- COLOR --}}
                    <div class="pro-filter-box" data-filter-box>
                        <p class="pro-filter-label">Color</p>

                        <button type="button" class="pro-filter-trigger" data-filter-trigger>
                            <span data-filter-text>{{ request('warna') ?: 'All Colors' }}</span>
                            <svg class="pro-filter-chevron" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div class="pro-filter-menu" data-filter-menu>
                            <button type="button"
                                class="pro-filter-option {{ request('warna') == '' ? 'active' : '' }}"
                                data-target="hiddenWarna"
                                data-value=""
                                data-label="All Colors">
                                All Colors
                            </button>

                            @if(isset($availableColors))
                                @foreach($availableColors as $color)
                                    <button type="button"
                                        class="pro-filter-option {{ request('warna') == $color ? 'active' : '' }}"
                                        data-target="hiddenWarna"
                                        data-value="{{ $color }}"
                                        data-label="{{ $color }}">
                                        {{ $color }}
                                    </button>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    {{-- RESET / STATUS --}}
                    <div class="pro-filter-side" id="resetButtonContainer">
                        @if(request()->hasAny(['kategori', 'ukuran', 'warna']))
                            <button type="button" id="clearFiltersBtn" class="pro-filter-reset">
                                Reset Filters
                                <span>{{ $activeFilterCount }}</span>
                            </button>
                        @else
                            <div class="pro-filter-status">
                                Auto Filter
                            </div>
                        @endif
                    </div>

                </div>
            </form>
        </div>

        {{-- PRODUCT GRID --}}
        <div id="productContainer" class="relative z-[1] grid sm:grid-cols-2 lg:grid-cols-3 gap-x-7 lg:gap-x-9 gap-y-12 transition-all duration-300">

            @fragment('product_list')
                @forelse($products as $product)
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

                    <article class="store-card group">

                        <div class="store-card-image">
                            @if($product->images && $product->images->count() > 0)
                                <img
                                    src="{{ asset('storage/' . $product->images->first()->url_gambar) }}"
                                    alt="{{ $product->nama_produk }}"
                                >
                            @else
                                <div class="store-card-empty">
                                    <span>
                                        <svg class="w-8 h-8 text-[#3A5311]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25l-9-5.25-9 5.25m18 0l-9 5.25m9-5.25v7.5l-9 5.25m0-7.5L3 8.25m9 5.25v7.5M3 8.25v7.5l9 5.25"></path>
                                        </svg>
                                    </span>
                                    <p>No Image</p>
                                </div>
                            @endif

                            <div class="store-card-fade"></div>

                            <div class="store-card-badges">
                                <span class="store-badge store-badge-light">
                                    {{ $product->status }}
                                </span>

                                <span class="store-badge store-badge-dark">
                                    {{ $product->ukuran }}
                                </span>
                            </div>

                            <a href="{{ $waUrl }}" target="_blank" class="store-card-order">
                                Order via WhatsApp
                            </a>
                        </div>

                        <div class="store-card-body">
                            <div class="store-card-meta">
                                <span>{{ $product->kategori }}</span>
                                <span>{{ $product->warna ?? '-' }}</span>
                            </div>

                            <h3 class="store-card-title">
                                {{ $product->nama_produk }}
                            </h3>

                            <p class="store-card-desc">
                                {{ $product->deskripsi }}
                            </p>

                            <div class="store-card-chips">
                                <span>{{ $product->kondisi }}</span>
                                <span>Size {{ $product->ukuran }}</span>
                            </div>

                            <div class="store-card-bottom">
                                <div>
                                    <p class="store-card-label">Price</p>
                                    <h4>
                                        Rp{{ number_format($product->harga, 0, ',', '.') }}
                                    </h4>
                                </div>

                                <a href="{{ $waUrl }}" target="_blank" class="store-card-wa" aria-label="Order product">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946C.06 5.348 5.397.01 12.008.01c3.202.001 6.212 1.246 8.477 3.514 2.266 2.268 3.507 5.28 3.505 8.484-.004 6.657-5.34 11.997-11.953 11.997-2.005-.001-3.973-.502-5.713-1.457L0 24z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                    </article>
                @empty
                    <div class="col-span-full">
                        <div class="empty-product-state">
                            <div class="mx-auto mb-5 w-16 h-16 rounded-2xl bg-[#F4F6F4] border border-[#4A6B4A]/10 flex items-center justify-center shadow-sm">
                                <svg class="w-8 h-8 text-[#3A5311]" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25l-9-5.25-9 5.25m18 0l-9 5.25m9-5.25v7.5l-9 5.25m0-7.5L3 8.25m9 5.25v7.5M3 8.25v7.5l9 5.25"></path>
                                </svg>
                            </div>

                            <p>Empty Result</p>

                            <h3>No Products Found</h3>

                            <span>
                                Coba reset filter atau pilih kombinasi kategori, ukuran, dan warna yang lain.
                            </span>

                            <button type="button" id="innerResetBtn">
                                Clear Filters
                            </button>
                        </div>
                    </div>
                @endforelse
            @endfragment

        </div>

    </div>
</section>