document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("mainNavbar");

    const logoBox = document.getElementById("navbarLogoBox");
    const logoText = document.getElementById("navbarLogoText");
    const brandTitle = document.getElementById("navbarBrandTitle");
    const brandSubtitle = document.getElementById("navbarBrandSubtitle");

    const navHomeLink = document.getElementById("navHomeLink");
    const navProductLink = document.getElementById("navProductLink");
    const mobileHomeLink = document.getElementById("mobileHomeLink");
    const mobileProductLink = document.getElementById("mobileProductLink");

    const loginBtn = document.getElementById("navbarLoginBtn");

    const menuBtn = document.getElementById("mobileMenuBtn");
    const menuDrawer = document.getElementById("mobileMenuDrawer");
    const hamburgerIcon = document.getElementById("hamburgerIcon");

    const stockSection = document.getElementById("stock-section");

    function setTopNavbar() {
        if (!navbar) return;

        navbar.className =
            "fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-[#4A6B4A]/95 backdrop-blur-xl border-b border-white/10 shadow-[0_18px_50px_rgba(26,36,26,0.12)]";

        if (logoBox) {
            logoBox.className =
                "w-10 h-10 rounded-lg bg-white border border-white flex items-center justify-center shadow-sm transition-all duration-300 group-hover:-translate-y-0.5";
        }

        if (logoText) {
            logoText.className =
                "text-[#3A5311] font-black text-lg tracking-tight transition-colors duration-300";
        }

        if (brandTitle) {
            brandTitle.className =
                "text-[13px] sm:text-sm font-black tracking-[0.22em] text-white uppercase transition-all duration-300";
        }

        if (brandSubtitle) {
            brandSubtitle.className =
                "mt-1 text-[8px] sm:text-[9px] font-bold tracking-[0.28em] text-white/65 uppercase transition-all duration-300";
        }

        if (loginBtn) {
            loginBtn.className =
                "bg-white text-[#3A5311] border border-white px-5 py-3 rounded-lg text-[10px] font-black uppercase tracking-[0.16em] hover:bg-[#F4F6F4] transition-all duration-300";
        }
    }

    function setScrolledNavbar() {
        if (!navbar) return;

        navbar.className =
            "fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-xl border-b border-[#4A6B4A]/15 shadow-[0_14px_40px_rgba(26,36,26,0.08)]";

        if (logoBox) {
            logoBox.className =
                "w-10 h-10 rounded-lg bg-[#3A5311] border border-[#3A5311] flex items-center justify-center shadow-sm transition-all duration-300 group-hover:-translate-y-0.5";
        }

        if (logoText) {
            logoText.className =
                "text-white font-black text-lg tracking-tight transition-colors duration-300";
        }

        if (brandTitle) {
            brandTitle.className =
                "text-[13px] sm:text-sm font-black tracking-[0.22em] text-[#3A5311] uppercase transition-all duration-300";
        }

        if (brandSubtitle) {
            brandSubtitle.className =
                "mt-1 text-[8px] sm:text-[9px] font-bold tracking-[0.28em] text-[#4A6B4A]/70 uppercase transition-all duration-300";
        }

        if (loginBtn) {
            loginBtn.className =
                "bg-[#3A5311] text-white border border-[#3A5311] px-5 py-3 rounded-lg text-[10px] font-black uppercase tracking-[0.16em] hover:bg-[#4A6B4A] transition-all duration-300";
        }
    }

    function setActiveMenu(section) {
        const isProduct = section === "product";
        const isScrolled = window.scrollY > 35;

        if (navHomeLink && navProductLink) {
            if (!isScrolled) {
                navHomeLink.className = isProduct
                    ? "js-scroll-link px-5 py-3 rounded-lg text-white/80 border border-transparent hover:text-white hover:bg-white/10 transition-all duration-300"
                    : "js-scroll-link px-5 py-3 rounded-lg bg-white text-[#3A5311] border border-white shadow-sm transition-all duration-300";

                navProductLink.className = isProduct
                    ? "js-scroll-link px-5 py-3 rounded-lg bg-white text-[#3A5311] border border-white shadow-sm transition-all duration-300"
                    : "js-scroll-link px-5 py-3 rounded-lg text-white/80 border border-transparent hover:text-white hover:bg-white/10 transition-all duration-300";
            } else {
                navHomeLink.className = isProduct
                    ? "js-scroll-link px-5 py-3 rounded-lg text-[#3A5311] border border-transparent hover:bg-[#F4F6F4] transition-all duration-300"
                    : "js-scroll-link px-5 py-3 rounded-lg bg-[#3A5311] text-white border border-[#3A5311] shadow-sm transition-all duration-300";

                navProductLink.className = isProduct
                    ? "js-scroll-link px-5 py-3 rounded-lg bg-[#3A5311] text-white border border-[#3A5311] shadow-sm transition-all duration-300"
                    : "js-scroll-link px-5 py-3 rounded-lg text-[#3A5311] border border-transparent hover:bg-[#F4F6F4] transition-all duration-300";
            }
        }

        if (mobileHomeLink && mobileProductLink) {
            mobileHomeLink.className = isProduct
                ? "js-scroll-link block px-4 py-4 rounded-lg text-xs font-black uppercase tracking-[0.16em] text-[#3A5311] hover:bg-[#F4F6F4] transition-all"
                : "js-scroll-link block px-4 py-4 rounded-lg text-xs font-black uppercase tracking-[0.16em] text-white bg-[#3A5311] transition-all";

            mobileProductLink.className = isProduct
                ? "js-scroll-link block px-4 py-4 rounded-lg text-xs font-black uppercase tracking-[0.16em] text-white bg-[#3A5311] transition-all"
                : "js-scroll-link block px-4 py-4 rounded-lg text-xs font-black uppercase tracking-[0.16em] text-[#3A5311] hover:bg-[#F4F6F4] transition-all";
        }
    }

    function updateNavbarState() {
        const isScrolled = window.scrollY > 35;

        if (isScrolled) {
            setScrolledNavbar();
        } else {
            setTopNavbar();
        }

        if (!stockSection) {
            setActiveMenu("home");
            return;
        }

        const stockTop = stockSection.getBoundingClientRect().top;

        if (stockTop <= 120) {
            setActiveMenu("product");
        } else {
            setActiveMenu("home");
        }
    }

    function scrollToTarget(targetId) {
        if (targetId === "home-section") {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });

            setTimeout(updateNavbarState, 500);
            return;
        }

        const target = document.getElementById(targetId);
        if (!target) return;

        const offset = 86;
        const targetPosition =
            target.getBoundingClientRect().top + window.pageYOffset - offset;

        window.scrollTo({
            top: targetPosition,
            behavior: "smooth",
        });

        setTimeout(updateNavbarState, 500);
    }

    document.querySelectorAll(".js-scroll-link").forEach((link) => {
        link.addEventListener("click", function (event) {
            const href = this.getAttribute("href");

            if (!href || !href.startsWith("#")) return;

            event.preventDefault();

            const targetId = href.replace("#", "");
            scrollToTarget(targetId);

            if (menuDrawer && !menuDrawer.classList.contains("hidden")) {
                toggleMenu();
            }
        });
    });

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

    window.addEventListener("scroll", updateNavbarState);
    updateNavbarState();

    const filterForm = document.getElementById("filterForm");
    const productContainer = document.getElementById("productContainer");
    const resetButtonContainer = document.getElementById("resetButtonContainer");

    function updateResetButtonVisibility() {
        if (!resetButtonContainer) return;

        const kategori = document.getElementById("hiddenKategori")?.value || "";
        const ukuran = document.getElementById("hiddenUkuran")?.value || "";
        const warna = document.getElementById("hiddenWarna")?.value || "";

        let activeCount = 0;
        if (kategori !== "") activeCount++;
        if (ukuran !== "") activeCount++;
        if (warna !== "") activeCount++;

        if (activeCount > 0) {
            resetButtonContainer.innerHTML = `
                <button type="button" id="clearFiltersBtn" class="pro-filter-reset">
                    Reset Filters
                    <span>${activeCount}</span>
                </button>
            `;
        } else {
            resetButtonContainer.innerHTML = `
                <div class="pro-filter-status">
                    Auto Filter
                </div>
            `;
        }
    }

    function applyFilter() {
        if (!filterForm || !productContainer) return;

        productContainer.classList.add("is-loading");

        const formData = new FormData(filterForm);
        const queryParams = new URLSearchParams(formData).toString();
        const requestUrl = queryParams
            ? `${filterForm.action}?${queryParams}`
            : filterForm.action;

        fetch(requestUrl, {
            headers: {
                "X-Requested-With": "XMLHttpRequest",
            },
        })
            .then((response) => response.text())
            .then((htmlContent) => {
                productContainer.innerHTML = htmlContent;
                productContainer.classList.remove("is-loading");
                updateResetButtonVisibility();
                window.history.pushState({}, "", requestUrl);
            })
            .catch((error) => {
                console.error("Gagal memuat produk via AJAX:", error);
                productContainer.classList.remove("is-loading");
            });
    }

    /* =========================
       CUSTOM FILTER DROPDOWN
    ========================= */
    const customFilterBoxes = document.querySelectorAll("[data-filter-box]");

    customFilterBoxes.forEach((box) => {
        const trigger = box.querySelector("[data-filter-trigger]");
        const text = box.querySelector("[data-filter-text]");
        const options = box.querySelectorAll(".pro-filter-option");

        if (!trigger || !text) return;

        trigger.addEventListener("click", function (event) {
            event.stopPropagation();

            customFilterBoxes.forEach((otherBox) => {
                if (otherBox !== box) {
                    otherBox.classList.remove("open");
                }
            });

            box.classList.toggle("open");
        });

        options.forEach((option) => {
            option.addEventListener("click", function (event) {
                event.stopPropagation();

                const targetId = this.dataset.target;
                const value = this.dataset.value;
                const label = this.dataset.label;
                const hiddenInput = document.getElementById(targetId);

                if (hiddenInput) {
                    hiddenInput.value = value;
                }

                text.textContent = label;

                options.forEach((opt) => opt.classList.remove("active"));
                this.classList.add("active");

                box.classList.remove("open");

                applyFilter();
            });
        });
    });

    document.addEventListener("click", function (event) {
        const clickedReset =
            event.target.id === "clearFiltersBtn" ||
            event.target.id === "innerResetBtn" ||
            event.target.closest("#clearFiltersBtn");

        if (clickedReset && filterForm) {
            event.preventDefault();

            const hiddenKategori = document.getElementById("hiddenKategori");
            const hiddenUkuran = document.getElementById("hiddenUkuran");
            const hiddenWarna = document.getElementById("hiddenWarna");

            if (hiddenKategori) hiddenKategori.value = "";
            if (hiddenUkuran) hiddenUkuran.value = "";
            if (hiddenWarna) hiddenWarna.value = "";

            document.querySelectorAll("[data-filter-box]").forEach((box) => {
                const text = box.querySelector("[data-filter-text]");
                const options = box.querySelectorAll(".pro-filter-option");

                if (text) {
                    if (box.querySelector('[data-target="hiddenKategori"]')) {
                        text.textContent = "All Categories";
                    } else if (box.querySelector('[data-target="hiddenUkuran"]')) {
                        text.textContent = "All Sizes";
                    } else if (box.querySelector('[data-target="hiddenWarna"]')) {
                        text.textContent = "All Colors";
                    }
                }

                options.forEach((opt) => opt.classList.remove("active"));

                const firstOption = box.querySelector(".pro-filter-option");
                if (firstOption) firstOption.classList.add("active");

                box.classList.remove("open");
            });

            applyFilter();
            return;
        }

        document.querySelectorAll("[data-filter-box]").forEach((box) => {
            box.classList.remove("open");
        });
    });
});