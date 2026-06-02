<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal | Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>

<body class="bg-[#FDFBF9] min-h-screen antialiased flex flex-col justify-between">

    <div class="grid lg:grid-cols-12 min-h-screen w-full">

        <div class="lg:col-span-5 flex flex-col justify-center px-6 sm:px-16 lg:px-20 py-12 bg-white relative">
            
            <div class="absolute top-0 left-0 w-32 h-32 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="w-full max-w-md mx-auto relative z-10">
                <div class="mb-10">
                    <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-primary text-white font-bold text-xl mb-6 shadow-lg shadow-primary/20">
                        A
                    </div>
                    <h1 class="text-3xl sm:text-4xl font-extrabold text-primary tracking-tight">
                        Welcome Back
                    </h1>
                    <p class="text-secondary/70 text-sm mt-2 font-light">
                        Silakan masuk untuk mengelola dashboard preloved Anda.
                    </p>
                </div>

                <form id="loginForm" class="space-y-5">
                    <div class="space-y-2">
                        <label for="email" class="text-xs font-bold text-primary/80 tracking-wider uppercase block">
                            Email Address
                        </label>
                        <div class="relative group">
                            <input 
                                type="email" 
                                id="email" 
                                class="w-full p-4 pl-11 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary placeholder:text-secondary/40 focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none transition-all duration-200" 
                                placeholder="admin@email.com" 
                                required
                            >
                            <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-secondary/40 group-focus-within:text-accent transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label for="password" class="text-xs font-bold text-primary/80 tracking-wider uppercase block">
                                Password
                            </label>
                        </div>
                        <div class="relative group">
                            <input 
                                type="password" 
                                id="password" 
                                class="w-full p-4 pl-11 rounded-xl border border-fourth bg-[#FDFBF9]/50 text-sm text-primary placeholder:text-secondary/40 focus:border-accent focus:bg-white focus:ring-4 focus:ring-accent/10 outline-none transition-all duration-200" 
                                placeholder="••••••••" 
                                required
                            >
                            <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-secondary/40 group-focus-within:text-accent transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div id="errorContainer" class="hidden transform scale-95 opacity-0 transition-all duration-300">
                        <div class="flex items-start gap-3 bg-red-50 border border-red-200 text-red-700 p-4 rounded-xl text-xs font-medium">
                            <svg class="w-4 h-4 mt-0.5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            <span id="errorText">Gagal melakukan login.</span>
                        </div>
                    </div>

                    <button type="submit" id="submitBtn" class="w-full bg-primary text-white py-4 rounded-xl font-bold text-xs tracking-widest uppercase hover:bg-accent transition-all duration-300 shadow-md hover:shadow-lg active:scale-[0.99] flex items-center justify-center gap-2">
                        <span>LOGIN TO DASHBOARD</span>
                        <svg id="spinner" class="animate-spin h-4 w-4 text-white hidden" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </button>
                </form>

                <p class="text-center lg:text-left text-[11px] text-secondary/40 mt-16 tracking-wide">
                    &copy; 2026 Preloved Admin Portal. All rights reserved.
                </p>
            </div>
        </div>

        <div class="hidden lg:col-span-7 lg:flex relative overflow-hidden bg-[#EFECE9] p-12">
            <div class="absolute inset-0 bg-[radial-gradient(#C7B299_1px,transparent_1px)] [background-size:16px_16px] opacity-30"></div>
            
            <div class="relative w-full h-full flex flex-col justify-between z-10">
                <div class="text-right">
                    <span class="text-[10px] font-bold tracking-[0.3em] text-primary/40 uppercase">Aesthetic Store Workspace</span>
                </div>

                <div class="w-full max-w-xl mx-auto my-auto aspect-[4/3] rounded-[32px] overflow-hidden shadow-[0_25px_60px_-15px_rgba(78,52,46,0.2)] border-4 border-white transform hover:scale-[1.01] transition-transform duration-500">
                    <img 
                        src="https://i.pinimg.com/1200x/18/a0/3f/18a03f72ec9435d59f784844a4f64476.jpg" 
                        class="w-full h-full object-cover object-center"
                        alt="Workspace Image"
                    >
                </div>

                <div class="max-w-md mx-auto text-center">
                    <p class="font-serif italic text-primary/80 text-lg">
                        "Simplicity is the ultimate sophistication."
                    </p>
                    <p class="text-[10px] font-bold tracking-widest text-accent mt-2 uppercase">
                        Administrative Console v1.0
                    </p>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.getElementById("loginForm").addEventListener("submit", async function(e) {
            e.preventDefault();
            
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            
            const errorContainer = document.getElementById("errorContainer");
            const errorText = document.getElementById("errorText");
            const submitBtn = document.getElementById("submitBtn");
            const spinner = document.getElementById("spinner");

            // 1. Reset & Sembunyikan Error lama
            errorContainer.classList.add("hidden", "scale-95", "opacity-0");
            errorContainer.classList.remove("scale-100", "opacity-100");

            // 2. Aktifkan Loading State pada tombol
            submitBtn.disabled = true;
            submitBtn.classList.add("opacity-80", "cursor-not-allowed");
            spinner.classList.remove("hidden");

            try {
                const response = await fetch("/api/admin/login", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({ email, password })
                });

                const data = await response.json();

                if (!response.ok) {
                    throw new Error(data.message || "Email atau password salah.");
                }

                localStorage.setItem("token", data.token);
                window.location.href = "/admin/home";

            } catch (err) {
                // 3. Tampilkan Error dengan animasi transisi yang mulus
                errorText.innerText = err.message;
                errorContainer.classList.remove("hidden");
                
                // Beri jeda micro-second agar efek transisi CSS berjalan
                setTimeout(() => {
                    errorContainer.classList.remove("scale-95", "opacity-0");
                    errorContainer.classList.add("scale-100", "opacity-100");
                }, 50);

                // 4. Matikan Loading State
                submitBtn.disabled = false;
                submitBtn.classList.remove("opacity-80", "cursor-not-allowed");
                spinner.classList.add("hidden");
            }
        });
    </script>
</body>

</html>