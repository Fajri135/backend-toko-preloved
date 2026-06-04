document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("mainNavbar");
    const menuBtn = document.getElementById("mobileMenuBtn");
    const menuDrawer = document.getElementById("mobileMenuDrawer");
    const hamburgerIcon = document.getElementById("hamburgerIcon");
    const mobileLinks = document.querySelectorAll("[data-mobile-link]");

    if (navbar) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 24) {
                navbar.classList.add("is-scrolled");
                navbar.classList.remove("bg-transparent");
                navbar.classList.add("bg-white/90", "shadow-sm");
            } else {
                navbar.classList.remove("is-scrolled");
                navbar.classList.add("bg-transparent");
                navbar.classList.remove("bg-white/90", "shadow-sm");
            }
        });
    }

    function toggleMenu() {
        if (!menuBtn || !menuDrawer || !hamburgerIcon) return;

        const isHidden = menuDrawer.classList.contains("hidden");

        if (isHidden) {
            menuDrawer.classList.remove("hidden");
            setTimeout(() => {
                menuDrawer.classList.remove("opacity-0", "-translate-y-3");
                menuDrawer.classList.add("opacity-100", "translate-y-0");
            }, 10);
            hamburgerIcon.setAttribute("d", "M6 18L18 6M6 6l12 12");
        } else {
            menuDrawer.classList.remove("opacity-100", "translate-y-0");
            menuDrawer.classList.add("opacity-0", "-translate-y-3");

            setTimeout(() => {
                menuDrawer.classList.add("hidden");
            }, 260);

            hamburgerIcon.setAttribute("d", "M4 7h16M4 12h16M4 17h16");
        }
    }

    if (menuBtn) {
        menuBtn.addEventListener("click", toggleMenu);
    }

    mobileLinks.forEach((link) => {
        link.addEventListener("click", function () {
            if (menuDrawer && !menuDrawer.classList.contains("hidden")) {
                toggleMenu();
            }
        });
    });

    const filterForm = document.getElementById("filterForm");
    const autoFilters = document.querySelectorAll(".auto-filter");
    const productContainer = document.getElementById("productContainer");
    const resetButtonContainer = document.getElementById("resetButtonContainer");

    function updateResetButtonVisibility() {
        if (!resetButtonContainer || !autoFilters.length) return;

        let isAnyFilterActive = false;

        autoFilters.forEach((select) => {
            if (select.value !== "") isAnyFilterActive = true;
        });

        if (isAnyFilterActive) {
            resetButtonContainer.innerHTML = `
                <button type="button" id="clearFiltersBtn" class="w-full border border-[rgba(26,36,26,0.16)] bg-white text-[#1A241A] py-3.5 px-4 rounded-lg text-[11px] font-black tracking-[0.16em] uppercase hover:bg-[#F4F6F4] transition-all flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.253 8H18"></path>
                    </svg>
                    Clear Filters
                </button>
            `;
        } else {
            resetButtonContainer.innerHTML = `
                <div class="hidden lg:flex items-center justify-end gap-2 text-[11px] text-[#687568] font-bold tracking-[0.14em] uppercase pb-3">
                    <span class="w-2 h-2 rounded-full bg-[#4A6B4A]"></span>
                    Auto Filtering
                </div>
            `;
        }
    }

    function applyFilter() {
        if (!filterForm || !productContainer) return;

        productContainer.style.opacity = "0.45";
        productContainer.style.transform = "translateY(4px)";

        const formData = new FormData(filterForm);
        const queryParams = new URLSearchParams(formData).toString();
        const requestUrl = `${filterForm.action}?${queryParams}`;

        fetch(requestUrl, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((response) => response.text())
            .then((htmlContent) => {
                productContainer.innerHTML = htmlContent;
                productContainer.style.opacity = "1";
                productContainer.style.transform = "translateY(0)";
                updateResetButtonVisibility();
                window.history.pushState({}, "", requestUrl);
            })
            .catch((error) => {
                console.error("Gagal memuat produk via AJAX:", error);
                productContainer.style.opacity = "1";
                productContainer.style.transform = "translateY(0)";
            });
    }

    if (autoFilters.length) {
        autoFilters.forEach((element) => {
            element.addEventListener("change", applyFilter);
        });
    }

    document.addEventListener("click", function (event) {
        const clickedReset =
            event.target.id === "clearFiltersBtn" ||
            event.target.id === "innerResetBtn" ||
            event.target.closest("#clearFiltersBtn");

        if (clickedReset && filterForm) {
            event.preventDefault();
            filterForm.reset();

            autoFilters.forEach((select) => {
                select.value = "";
            });

            applyFilter();
        }
    });
});