<?php
/** @var string|null $error */
?>
<section class="auth-landing">
    <div class="auth-shell">
        <div class="auth-visual">
            <div class="auth-visual-content">
                <p class="auth-eyebrow">Plataforma de control</p>
                <h1>Bienvenido de nuevo</h1>
                <p class="auth-lead">Gestiona accesos, registra check-ins y monitorea a tu equipo desde un panel sencillo y seguro.</p>
                <div class="auth-pill-rail">
                    <span class="auth-pill">Reportes rápidos</span>
                    <span class="auth-pill">Registro fotográfico</span>
                    <span class="auth-pill">Ubicación en vivo</span>
                </div>
            </div>
        </div>
        <div class="auth-form">
            <div class="auth-card">
                <p class="auth-kicker">Usuario registrado</p>
                <h2>Inicia sesión</h2>
                <p class="auth-sub">Ingresa con tu correo corporativo para continuar.</p>

                <?php if (!empty($error)): ?>
                    <div class="alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
                <?php endif; ?>

                <form action="/login" method="POST" class="auth-form-grid">
                    <label for="email">Correo electrónico</label>
                    <div class="input-pill">
                        <span class="material-symbols-outlined">mail</span>
                        <input type="email" id="email" name="email" placeholder="tu@empresa.com" required>
                    </div>

                    <label for="password">Contraseña</label>
                    <div class="input-pill">
                        <span class="material-symbols-outlined">lock</span>
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                    </div>

                    <div class="auth-form-foot">
                        <label class="remember">
                            <input type="checkbox" name="remember" checked>
                            <span>Mantener sesión</span>
                        </label>
                        <a class="auth-link" href="#">¿Olvidaste tu contraseña?</a>
                    </div>

                    <button class="btn-primary" type="submit">Ingresar</button>
                </form>
                <p class="auth-meta">Acceso exclusivo para personal autorizado.</p>
            </div>
        </div>
    </div>
</section>
