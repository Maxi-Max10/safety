<section class="login-wrapper">
    <div class="login-card">
        <div class="login-brand">
            <div class="brand-badge">CS</div>
            <div>
                <h1>Control de Seguridad</h1>
                <p>Accedé a tu panel para gestionar actividad y turnos.</p>
            </div>
        </div>

        <?php if (!empty($error)) : ?>
            <div class="alert"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="post" action="/login" class="login-form">
            <label>Email</label>
            <input type="email" name="email" placeholder="tu@email.com" required>
            <label>Contraseña</label>
            <input type="password" name="password" placeholder="••••••••" required>
            <button type="submit">Entrar</button>
        </form>
    </div>

    <div class="login-panel">
        <h2>Gestión segura y simple</h2>
        <ul>
            <li>Ubicación en tiempo real</li>
            <li>Registro de entradas y salidas</li>
            <li>Fotos del lugar de trabajo</li>
            <li>Reportes en Excel</li>
        </ul>
    </div>
</section>
