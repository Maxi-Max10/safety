<div class="dark" style="font-family: 'Manrope', sans-serif;">
    <div class="min-h-[100dvh] w-full bg-gradient-to-b from-slate-100 via-slate-200 to-slate-300 dark:from-[#0b1220] dark:via-[#0d1526] dark:to-[#0b1220] text-slate-900 dark:text-white transition-colors duration-300 flex items-center justify-center px-4 py-10">
        <div class="relative w-full max-w-5xl grid grid-cols-1 md:grid-cols-2 overflow-hidden shadow-2xl border-0 rounded-3xl bg-white/70 dark:bg-[#0f172a]/90 backdrop-blur-lg">
            <div class="absolute inset-0 -z-10 opacity-30 pointer-events-none hidden md:block">
                <svg class="absolute -top-10 -right-20 w-[500px] h-[500px]" viewBox="0 0 100 100">
                    <circle class="text-primary" cx="50" cy="50" fill="none" r="40" stroke="currentColor" stroke-width="0.5"></circle>
                    <circle class="text-primary" cx="50" cy="50" fill="none" r="30" stroke="currentColor" stroke-width="0.5"></circle>
                    <path class="text-primary" d="M50 10 L50 90 M10 50 L90 50" fill="none" stroke="currentColor" stroke-width="0.2"></path>
                </svg>
            </div>

            <div class="p-6 md:p-10 flex flex-col">
                <header class="flex items-center justify-between mb-8">
                    <div class="flex items-center gap-3">
                        <div class="size-11 rounded-2xl bg-primary flex items-center justify-center text-white shadow-lg shadow-primary/30">
                            <span class="material-symbols-outlined text-2xl font-bold">shield</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xs font-bold uppercase tracking-widest text-primary">SecureGuard</span>
                            <span class="text-[11px] text-slate-500 dark:text-slate-400 font-medium">Enterprise Auth v4.2</span>
                        </div>
                    </div>
                    <div class="h-9 w-9 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500">
                        <span class="material-symbols-outlined text-base">info</span>
                    </div>
                </header>

                <main class="flex-1 flex flex-col justify-center">
                    <div class="mb-8">
                        <h1 class="text-3xl md:text-4xl font-bold leading-tight tracking-tight dark:text-white mb-3">Authorize Access</h1>
                        <p class="text-slate-500 dark:text-slate-400 text-sm">Please verify your credentials to enter the secure portal.</p>
                    </div>

                    <?php if (!empty($error)) : ?>
                        <div class="mb-4 text-sm text-red-400 text-left"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>

                    <form method="post" action="/login" class="space-y-4">
                        <div class="flex flex-col gap-2">
                            <p class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1">Employee ID</p>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">badge</span>
                                </div>
                                <input name="email" class="form-input flex w-full rounded-xl border border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/70 py-4 pl-12 pr-4 text-base font-medium placeholder:text-slate-400 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" placeholder="Enter unique ID" type="email" required />
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <p class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1">Password</p>
                            <div class="flex w-full items-stretch rounded-xl border border-slate-200 dark:border-slate-800 bg-white/80 dark:bg-slate-900/70 focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 transition-all overflow-hidden">
                                <div class="flex items-center pl-4 text-slate-400">
                                    <span class="material-symbols-outlined text-xl">lock</span>
                                </div>
                                <input name="password" class="form-input w-full border-0 bg-transparent py-4 px-3 text-base font-medium placeholder:text-slate-400 focus:ring-0 outline-none" placeholder="••••••••" type="password" required />
                                <button type="button" class="flex items-center justify-center pr-4 text-slate-400 hover:text-primary transition-colors">
                                    <span class="material-symbols-outlined text-xl">visibility</span>
                                </button>
                            </div>
                        </div>

                        <div class="flex justify-end">
                            <a class="text-primary text-sm font-bold hover:underline" href="#">Forgot Password?</a>
                        </div>

                        <button class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded-xl shadow-lg shadow-primary/20 active:scale-[0.98] transition-all flex items-center justify-center gap-2 mt-4" type="submit">
                            <span>AUTHORIZE LOGIN</span>
                            <span class="material-symbols-outlined text-lg">arrow_forward</span>
                        </button>
                    </form>
                </main>

                <footer class="pt-8 pb-4 text-left">
                    <div class="flex items-center gap-2 mb-2 text-emerald-500">
                        <span class="material-symbols-outlined text-sm">lock</span>
                        <span class="text-[10px] font-bold uppercase tracking-widest">End-to-End Encrypted</span>
                    </div>
                    <p class="text-[11px] text-slate-500 dark:text-slate-500">Authorized Personnel Only. All activities are logged for auditing purposes.</p>
                </footer>
            </div>

            <div class="hidden md:flex flex-col justify-center gap-8 p-10 bg-gradient-to-b from-[#0f172a] to-[#0b1220] text-slate-100 border-l border-slate-800">
                <div class="space-y-3">
                    <p class="text-xs uppercase tracking-[0.2em] text-primary">Biometric Login</p>
                    <div class="flex flex-col items-center gap-3">
                        <button type="button" class="group flex flex-col items-center gap-4 transition-all">
                            <div class="size-24 rounded-[28px] bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 group-hover:text-primary group-hover:border-primary/50 group-active:scale-95 transition-all shadow-2xl">
                                <span class="material-symbols-outlined text-[54px] font-thin">face</span>
                            </div>
                            <span class="text-xs font-bold text-slate-300 uppercase tracking-tighter">Use Face ID</span>
                        </button>
                    </div>
                </div>
                <div class="text-sm text-slate-400 leading-relaxed">
                    Monitor your workforce securely: geolocation, check-ins, photos, and Excel-ready reports—all protected with enterprise-grade encryption.
                </div>
            </div>
        </div>
    </div>
</div>
