<nav id="mainNavbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-[#4A6B4A]/95 backdrop-blur-xl border-b border-white/10 shadow-[0_18px_50px_rgba(26,36,26,0.12)]">
    <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
        <div class="h-[72px] flex items-center justify-between">

            {{-- BRAND --}}
            <a href="#home-section" id="brandHomeLink" class="js-scroll-link flex items-center gap-3 group select-none">
                <div id="navbarLogoBox" class="w-10 h-10 rounded-lg bg-white border border-white flex items-center justify-center shadow-sm transition-all duration-300 group-hover:-translate-y-0.5">
                    <span id="navbarLogoText" class="text-[#3A5311] font-black text-lg tracking-tight transition-colors duration-300">
                        P
                    </span>
                </div>

                <div class="leading-none">
                    <h1 id="navbarBrandTitle" class="text-[13px] sm:text-sm font-black tracking-[0.22em] text-white uppercase transition-all duration-300">
                        Preloved
                    </h1>
                    <p id="navbarBrandSubtitle" class="mt-1 text-[8px] sm:text-[9px] font-bold tracking-[0.28em] text-white/65 uppercase transition-all duration-300">
                        Luxury Store
                    </p>
                </div>
            </a>

            {{-- DESKTOP MENU --}}
            <div class="hidden md:flex items-center gap-2 text-[11px] font-black uppercase tracking-[0.18em]">
                <a id="navHomeLink" href="#home-section" class="js-scroll-link px-5 py-3 rounded-lg bg-white text-[#3A5311] border border-white shadow-sm transition-all duration-300">
                    Home
                </a>

                <a id="navProductLink" href="#stock-section" class="js-scroll-link px-5 py-3 rounded-lg text-white/80 border border-transparent hover:text-white hover:bg-white/10 transition-all duration-300">
                    Product
                </a>
            </div>

            {{-- DESKTOP ACTION --}}
            <div class="hidden md:flex items-center gap-3">
                <a id="navbarLoginBtn" href="/login" class="bg-white text-[#3A5311] border border-white px-5 py-3 rounded-lg text-[10px] font-black uppercase tracking-[0.16em] hover:bg-[#F4F6F4] transition-all duration-300">
                    Admin Login
                </a>
            </div>

            {{-- MOBILE BUTTON --}}
            <button id="mobileMenuBtn" type="button" class="md:hidden w-10 h-10 rounded-lg bg-white text-[#3A5311] border border-white flex items-center justify-center" aria-label="Toggle Menu">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path id="hamburgerIcon" stroke-linecap="round" stroke-linejoin="round" d="M4 7h16M4 12h16M4 17h16"></path>
                </svg>
            </button>

        </div>
    </div>

    {{-- MOBILE DRAWER --}}
    <div id="mobileMenuDrawer" class="hidden md:hidden absolute top-20 left-5 right-5 bg-white/95 backdrop-blur-xl rounded-xl border border-[rgba(26,36,26,0.10)] shadow-[0_24px_70px_rgba(26,36,26,0.16)] opacity-0 transform -translate-y-3 transition-all duration-300 overflow-hidden">
        <div class="p-3">
            <a id="mobileHomeLink" href="#home-section" data-mobile-link class="js-scroll-link block px-4 py-4 rounded-lg text-xs font-black uppercase tracking-[0.16em] text-white bg-[#3A5311] transition-all">
                Home
            </a>

            <a id="mobileProductLink" href="#stock-section" data-mobile-link class="js-scroll-link block px-4 py-4 rounded-lg text-xs font-black uppercase tracking-[0.16em] text-[#3A5311] hover:bg-[#F4F6F4] transition-all">
                Product
            </a>

            <a href="/login" data-mobile-link class="mt-2 flex items-center justify-center px-4 py-4 rounded-lg text-xs font-black uppercase tracking-[0.16em] bg-[#3A5311] text-white transition-all">
                Admin Login
            </a>
        </div>
    </div>
</nav>