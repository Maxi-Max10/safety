<section class="container py-5">
    <div class="row g-4 align-items-stretch">
        <div class="col-lg-7">
            <div class="card border-0 shadow-lg h-100">
                <div class="card-body p-4 p-md-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="rounded-4 text-white fw-bold d-flex align-items-center justify-content-center" style="width:52px;height:52px;background:linear-gradient(135deg,#2563eb,#60a5fa);">CS</div>
                        <div>
                            <h1 class="h3 mb-1">Control de Seguridad</h1>
                            <p class="text-secondary mb-0">Accedé a tu panel para gestionar actividad y turnos.</p>
                        </div>
                    </div>

                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>

                    <form method="post" action="/login">
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input class="form-control form-control-lg" type="email" name="email" placeholder="tu@email.com" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Contraseña</label>
                            <input class="form-control form-control-lg" type="password" name="password" placeholder="••••••••" required>
                        </div>
                        <button class="btn btn-primary btn-lg w-100" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="card border-0 shadow-lg h-100 text-white" style="background:linear-gradient(180deg,#0f172a,#1e293b);">
                <div class="card-body p-4 p-md-5">
                    <h2 class="h4">Gestión segura y simple</h2>
                    <ul class="mt-4 mb-0">
                        <li>Ubicación en tiempo real</li>
                        <li>Registro de entradas y salidas</li>
                        <li>Fotos del lugar de trabajo</li>
                        <li>Reportes en Excel</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
