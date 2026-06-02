<nav id="mainNavbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-white/40 backdrop-blur-md border-b border-[#4E342E]/5 hover:bg-white/90">
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="h-20 flex items-center justify-between">

            <a href="/login" class="flex items-center gap-3 group cursor-pointer select-none">
                <div class="relative w-10 h-10 rounded-full border border-primary/20 flex items-center justify-center group-hover:border-accent group-hover:scale-105 transition-all duration-500">
                    <span class="text-primary font-serif font-semibold text-lg tracking-tight group-hover:text-accent transition-colors duration-300">P</span>
                    <div class="absolute -inset-1 rounded-full border border-accent/0 group-hover:border-accent/10 group-hover:scale-105 transition-all duration-500"></div>
                </div>
                <div>
                    <h1 class="font-serif font-bold text-base tracking-[0.25em] text-primary leading-none group-hover:text-accent transition-colors duration-500">
                        PRELOVED
                    </h1>
                    <p class="text-[8px] text-secondary/60 font-sans tracking-[0.4em] uppercase mt-1 group-hover:text-primary transition-colors duration-500">
                        Luxury Studio
                    </p>
                </div>
            </a>

            <div class="hidden md:flex items-center gap-10 font-sans text-xs uppercase tracking-[0.2em] font-medium">
                <a href="/" class="text-secondary/60 hover:text-primary transition-colors duration-300 relative py-2 group">
                    <span>Home</span>
                    <span class="absolute bottom-0 left-1/2 w-1 h-1 rounded-full bg-accent opacity-0 -translate-x-1/2 group-hover:opacity-100 transition-all duration-300"></span>
                </a>
                
                <a href="#stock-section" class="text-primary relative py-2 group">
                    <span>Stock</span>
                    <span class="absolute bottom-0 left-1/2 w-1 h-1 rounded-full bg-accent -translate-x-1/2"></span>
                </a>
            </div>

            <div class="hidden md:flex items-center">
                <a href="#stock-section" class="relative overflow-hidden border border-primary/80 text-primary px-7 py-3 rounded-full text-[10px] font-sans font-semibold tracking-[0.2em] uppercase transition-all duration-500 group block">
                    <span class="relative z-10 group-hover:text-white transition-colors duration-500">Browse Products</span>
                    <span class="absolute inset-0 bg-primary translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-out"></span>
                </a>
            </div>

            <div class="flex items-center md:hidden">
                <button id="mobileMenuBtn" type="button" class="text-primary hover:text-accent p-2 rounded-full focus:outline-none transition-colors" aria-label="Toggle Menu">
                    <svg class="w-5 h-5 transition-transform duration-500" id="hamburgerSvg" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                        <path id="hamburgerIcon" stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6h16.5"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <div id="mobileMenuDrawer" class="hidden md:hidden absolute top-24 left-4 right-4 bg-white/95 backdrop-blur-xl rounded-3xl border border-[#4E342E]/5 shadow-[0_20px_50px_rgba(78,52,46,0.08)] transition-all duration-500 opacity-0 transform -translate-y-4 overflow-hidden">
        <div class="p-6 space-y-4">
            <a href="/" class="block px-5 py-4 rounded-2xl text-xs uppercase tracking-[0.15em] font-medium text-secondary/70 hover:bg-light/50 hover:text-primary transition-all">
                Home
            </a>
            <a href="#stock-section" id="mobileStockLink" class="block px-5 py-4 rounded-2xl text-xs uppercase tracking-[0.15em] font-semibold bg-primary/5 text-primary transition-all">
                Stock
            </a>
            <div class="pt-2">
                <a href="#stock-section" id="mobileBrowseLink" class="w-full bg-primary text-white py-4 rounded-2xl text-[10px] font-sans font-semibold tracking-[0.2em] uppercase shadow-sm block text-center hover:bg-accent transition-colors duration-300">
                    Browse Products
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="h-20"></div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.getElementById("mainNavbar");
        const menuBtn = document.getElementById("mobileMenuBtn");
        const menuDrawer = document.getElementById("mobileMenuDrawer");
        const hamburgerIcon = document.getElementById("hamburgerIcon");
        const hamburgerSvg = document.getElementById("hamburgerSvg");
        const mobileLinks = [
            document.getElementById("mobileStockLink"),
            document.getElementById("mobileBrowseLink")
        ];

        // 1. Dynamic Solid Background on Scroll
        window.addEventListener("scroll", function() {
            if (window.scrollY > 30) {
                navbar.classList.remove("bg-white/40");
                navbar.classList.add("bg-white/90", "shadow-sm");
            } else {
                navbar.classList.remove("bg-white/90", "shadow-sm");
                navbar.classList.add("bg-white/40");
            }
        });

        // 2. Elegant Menu Toggle Sequence
        function toggleMenu() {
            const isHidden = menuDrawer.classList.contains("hidden");

            if (isHidden) {
                menuDrawer.classList.remove("hidden");
                hamburgerSvg.classList.add("rotate-90");
                setTimeout(() => {
                    menuDrawer.classList.remove("opacity-0", "-translate-y-4");
                    menuDrawer.classList.add("opacity-100", "translate-y-0");
                }, 10);
                hamburgerIcon.setAttribute("d", "M6 18L18 6M6 6l12 12"); // Modern Thin X Icon
            } else {
                hamburgerSvg.classList.remove("rotate-90");
                menuDrawer.classList.remove("opacity-100", "translate-y-0");
                menuDrawer.classList.add("opacity-0", "-translate-y-4");
                setTimeout(() => {
                    menuDrawer.classList.add("hidden");
                }, 400);
                hamburgerIcon.setAttribute("d", "M3.75 9h16.5m-16.5 6h16.5"); // Minimalist Dual Line Hamburger
            }
        }

        menuBtn.addEventListener("click", toggleMenu);
        
        // Auto close mobile drawer once anchor targets are invoked
        mobileLinks.forEach(link => {
            if (link) {
                link.addEventListener("click", function() {
                    if (!menuDrawer.classList.contains("hidden")) {
                        toggleMenu();
                    }
                });
            }
        });
    });
</script>