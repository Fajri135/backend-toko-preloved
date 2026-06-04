<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Preloved</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body class="admin-login-page">

    <section class="admin-login-left">
        <div class="admin-login-card">

            <a href="/" class="admin-login-brand">
                <div class="admin-login-logo">
                    P
                </div>

                <div>
                    <h1 class="admin-sidebar-title text-[#1A241A]">Preloved</h1>
                    <p class="admin-sidebar-subtitle text-[#687568]">Admin Portal</p>
                </div>
            </a>

            <p class="admin-kicker">Welcome Back</p>

            <h2 class="mt-4 text-5xl font-black tracking-[-0.055em] leading-[0.95] text-[#1A241A]">
                Login Admin
            </h2>

            <p class="mt-5 text-sm leading-7 text-[#687568] font-medium">
                Masuk untuk mengelola katalog produk, memperbarui status inventori, dan menjaga koleksi toko tetap rapi.
            </p>

            <form id="loginForm" class="mt-9 space-y-5">
                <div class="admin-field">
                    <label>Email Address</label>
                    <input type="email" id="email" placeholder="admin@email.com" required>
                </div>

                <div class="admin-field">
                    <label>Password</label>
                    <input type="password" id="password" placeholder="••••••••" required>
                </div>

                <div id="errorContainer" class="hidden opacity-0 scale-95 transition-all duration-300">
                    <div class="rounded-2xl border border-red-200 bg-red-50 text-red-700 p-4 text-sm font-semibold">
                        <span id="errorText">Gagal melakukan login.</span>
                    </div>
                </div>

                <button type="submit" id="submitBtn" class="admin-primary-btn w-full">
                    <span>Login to Dashboard</span>

                    <svg id="spinner" class="animate-spin h-4 w-4 text-white hidden" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                    </svg>
                </button>
            </form>

            <p class="mt-12 pt-6 border-t border-[#1A241A]/10 text-[11px] text-[#687568]/70 font-medium">
                &copy; 2026 Preloved Admin Portal. All rights reserved.
            </p>

        </div>
    </section>

    <section class="admin-login-right">
        <div class="admin-login-right-grid"></div>

        <div class="admin-login-visual">
            <div class="text-right">
                <span class="text-[10px] font-black uppercase tracking-[0.30em] text-white/55">
                    Aesthetic Store Workspace
                </span>
            </div>

            <div class="admin-login-image">
                <img
                    src="https://i.pinimg.com/1200x/18/a0/3f/18a03f72ec9435d59f784844a4f64476.jpg"
                    alt="Preloved workspace"
                >
            </div>

            <div class="max-w-xl">
                <h3 class="text-5xl font-black uppercase tracking-[-0.06em] leading-[0.92] text-white">
                    Curate Better.
                    <span class="block text-[#1A241A]">
                        Sell Smarter.
                    </span>
                </h3>

                <p class="mt-5 text-sm leading-7 text-white/72 font-medium max-w-md">
                    Dashboard sederhana untuk mengelola katalog preloved dengan tampilan bersih, rapi, dan profesional.
                </p>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("loginForm").addEventListener("submit", async function(e) {
            e.preventDefault();

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            const errorContainer = document.getElementById("errorContainer");
            const errorText = document.getElementById("errorText");
            const submitBtn = document.getElementById("submitBtn");
            const spinner = document.getElementById("spinner");

            errorContainer.classList.add("hidden", "scale-95", "opacity-0");
            errorContainer.classList.remove("scale-100", "opacity-100");

            submitBtn.disabled = true;
            submitBtn.classList.add("opacity-80", "cursor-not-allowed");
            spinner.classList.remove("hidden");

            try {
                const response = await fetch("/api/admin/login", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        email,
                        password
                    })
                });

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.message || "Email atau password salah.");
                }

                localStorage.setItem("token", data.token);
                window.location.href = "/admin/home";
            } catch (err) {
                errorText.innerText = err.message;
                errorContainer.classList.remove("hidden");

                setTimeout(() => {
                    errorContainer.classList.remove("scale-95", "opacity-0");
                    errorContainer.classList.add("scale-100", "opacity-100");
                }, 50);

                submitBtn.disabled = false;
                submitBtn.classList.remove("opacity-80", "cursor-not-allowed");
                spinner.classList.add("hidden");
            }
        });
    </script>

</body>

</html>