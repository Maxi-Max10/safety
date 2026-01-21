<div class="dark" style="font-family: 'Manrope', sans-serif;">
    <div class="relative flex h-screen w-full max-w-[430px] mx-auto flex-col overflow-x-hidden shadow-2xl border-x border-slate-200 dark:border-slate-800 bg-background-light dark:bg-background-dark text-slate-900 dark:text-white transition-colors duration-300">
        <header class="flex items-center justify-between p-6 pt-12">
            <div class="flex items-center gap-2">
                <div class="size-10 rounded-xl bg-primary flex items-center justify-center text-white shadow-lg shadow-primary/30">
                    <span class="material-symbols-outlined text-2xl font-bold">shield</span>
                </div>
                <div class="flex flex-col">
                    <span class="text-xs font-bold uppercase tracking-widest text-primary">SecureGuard</span>
                    <span class="text-[10px] text-slate-500 dark:text-slate-400 font-medium">Enterprise Auth v4.2</span>
                </div>
            </div>
            <div class="h-8 w-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center">
                <span class="material-symbols-outlined text-sm">info</span>
            </div>
        </header>

        <main class="flex-1 px-6 flex flex-col justify-center">
            <div class="mb-10 text-center">
                <h1 class="text-3xl font-bold leading-tight tracking-tight dark:text-white mb-2">Authorize Access</h1>
                <p class="text-slate-500 dark:text-slate-400 text-sm">Please verify your credentials to enter the secure portal.</p>
            </div>

            <?php if (!empty($error)) : ?>
                <div class="mb-4 text-sm text-red-400 text-center"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="post" action="/login" class="space-y-4">
                <div class="flex flex-col gap-2">
                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1">Employee ID</p>
                    <div class="relative group">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none text-slate-400 group-focus-within:text-primary transition-colors">
                            <span class="material-symbols-outlined text-xl">badge</span>
                        </div>
                        <input name="email" class="form-input flex w-full rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 py-4 pl-12 pr-4 text-base font-medium placeholder:text-slate-400 focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all outline-none" placeholder="Enter unique ID" type="email" required />
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <p class="text-sm font-semibold text-slate-700 dark:text-slate-300 ml-1">Password</p>
                    <div class="flex w-full items-stretch rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50 focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 transition-all overflow-hidden">
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

            <div class="flex items-center my-10 gap-4">
                <div class="flex-1 h-px bg-slate-200 dark:bg-slate-800"></div>
                <span class="text-xs font-bold text-slate-400 uppercase tracking-widest">Biometric Login</span>
                <div class="flex-1 h-px bg-slate-200 dark:bg-slate-800"></div>
            </div>

            <div class="flex justify-center mb-8">
                <button type="button" class="group flex flex-col items-center gap-4 transition-all">
                    <div class="size-20 rounded-3xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 flex items-center justify-center text-slate-400 group-hover:text-primary group-hover:border-primary/50 group-active:scale-95 transition-all shadow-xl dark:shadow-black/50">
                        <span class="material-symbols-outlined text-[48px] font-thin">face</span>
                    </div>
                    <span class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-tighter">Use Face ID</span>
                </button>
            </div>
        </main>

        <footer class="p-8 text-center">
            <div class="flex items-center justify-center gap-2 mb-2 text-emerald-500">
                <span class="material-symbols-outlined text-sm">lock</span>
                <span class="text-[10px] font-bold uppercase tracking-widest">End-to-End Encrypted</span>
            </div>
            <p class="text-[10px] text-slate-400 dark:text-slate-500">Authorized Personnel Only. All activities are logged for auditing purposes.</p>
        </footer>

        <div class="absolute top-0 right-0 -z-10 opacity-10 pointer-events-none overflow-hidden h-full w-full">
            <svg class="absolute -top-20 -right-20 w-[400px] h-[400px]" viewBox="0 0 100 100">
                <circle class="text-primary" cx="50" cy="50" fill="none" r="40" stroke="currentColor" stroke-width="0.5"></circle>
                <circle class="text-primary" cx="50" cy="50" fill="none" r="30" stroke="currentColor" stroke-width="0.5"></circle>
                <path class="text-primary" d="M50 10 L50 90 M10 50 L90 50" fill="none" stroke="currentColor" stroke-width="0.2"></path>
            </svg>
        </div>
    </div>
</div>
