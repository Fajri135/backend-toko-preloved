<aside class="fixed left-0 top-0 h-screen w-72 bg-primary text-white shadow-[4px_0_24px_rgba(0,0,0,0.02)] flex flex-col z-50 border-r border-white/5">

    <!-- BRAND LOGO -->
    <div class="h-24 flex items-center px-8 border-b border-white/5">
        <!-- Logo box dengan sudut melengkung tegas khas app modern -->
        <div class="w-11 h-11 rounded-xl bg-accent flex items-center justify-center mr-4 shadow-lg shadow-accent/20 transition-transform duration-300 hover:scale-105">
            <span class="text-white font-black text-lg tracking-wider">P</span>
        </div>
        <div>
            <h1 class="font-extrabold text-lg tracking-tight bg-gradient-to-r from-white to-zinc-300 bg-clip-text text-transparent">
                PRELOVED
            </h1>
            <p class="text-[10px] font-bold tracking-[0.2em] text-accent uppercase mt-0.5">
                Admin Console
            </p>
        </div>
    </div>

    <!-- NAVIGATION MENU -->
    <div class="flex-1 px-4 py-8 space-y-1.5 overflow-y-auto custom-scrollbar">
        
        <!-- Sub-header Menu untuk mempertegas hierarki -->
        <p class="px-4 text-[10px] font-bold text-zinc-500 tracking-[0.15em] uppercase mb-4">
            Main Menu
        </p>

        <!-- DASHBOARD / HOME -->
        <a href="{{ route('admin.home') }}" 
           class="group flex items-center justify-between px-4 py-3.5 rounded-xl transition-all duration-300 relative
           {{ request()->routeIs('admin.home') 
                ? 'bg-white/10 text-white font-semibold' 
                : 'text-zinc-400 hover:text-white hover:bg-white/[0.04]' 
           }}">
            <div class="flex items-center gap-3.5">
                <!-- Icon Home (SVG Slim) -->
                <svg class="w-5 h-5 transition-colors duration-300 {{ request()->routeIs('admin.home') ? 'text-accent' : 'text-zinc-400 group-hover:text-white' }}" 
                     fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                </svg>
                <span class="text-sm tracking-wide">Dashboard</span>
            </div>
            
            <!-- Indikator Dot Glowing saat aktif -->
            @if(request()->routeIs('admin.home'))
                <span class="w-1.5 h-1.5 rounded-full bg-accent shadow-[0_0_8px_#C7B299] absolute right-4"></span>
            @endif
        </a>

        <!-- PRODUCT -->
        <a href="{{ route('admin.product') }}" 
           class="group flex items-center justify-between px-4 py-3.5 rounded-xl transition-all duration-300 relative
           {{ request()->routeIs('admin.product') || request()->routeIs('admin.product.create') 
                ? 'bg-white/10 text-white font-semibold' 
                : 'text-zinc-400 hover:text-white hover:bg-white/[0.04]' 
           }}">
            <div class="flex items-center gap-3.5">
                <!-- Icon Product (SVG Slim) -->
                <svg class="w-5 h-5 transition-colors duration-300 {{ request()->routeIs('admin.product') || request()->routeIs('admin.product.create') ? 'text-accent' : 'text-zinc-400 group-hover:text-white' }}" 
                     fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"></path>
                </svg>
                <span class="text-sm tracking-wide">Products</span>
            </div>

            <!-- Indikator Dot Glowing saat aktif -->
            @if(request()->routeIs('admin.product') || request()->routeIs('admin.product.create'))
                <span class="w-1.5 h-1.5 rounded-full bg-accent shadow-[0_0_8px_#C7B299] absolute right-4"></span>
            @endif
        </a>

    </div>

    <!-- FOOTER PROFILE & LOGOUT -->
    <div class="p-4 border-t border-white/5 space-y-4 bg-black/10">
        <!-- Info Mini Profile (Menambah kesan aplikasi profesional) -->
        <div class="flex items-center gap-3 px-2 py-1">
            <div class="w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center font-bold text-xs text-zinc-300">
                AD
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-xs font-semibold text-white truncate">Administrator</p>
                <p class="text-[10px] text-zinc-500 truncate">admin@email.com</p>
            </div>
        </div>

        <!-- Logout Button (Sleek Bordered Style) -->
        <button onclick="logout()" 
                class="w-full py-3 rounded-xl bg-white/5 hover:bg-red-500/10 border border-white/10 hover:border-red-500/20 text-zinc-300 hover:text-red-400 font-bold text-xs tracking-wider uppercase transition-all duration-300 flex items-center justify-center gap-2 group active:scale-[0.98]">
            <svg class="w-4 h-4 text-zinc-400 group-hover:text-red-400 transition-colors" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75"></path>
            </svg>
            <span>Sign Out</span>
        </button>
    </div>

</aside>

<script>
    function logout() {
        localStorage.removeItem("token");
        window.location.href = "/login";
    }
</script>

<style>
    /* Mengantisipasi menu yang bertambah panjang di kemudian hari */
    .custom-scrollbar::-webkit-scrollbar { width: 4px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.05); border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: rgba(255,255,255,0.1); }
</style>