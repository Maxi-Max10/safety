<?php
/** @var string|null $error */
?>
<section class="auth-landing">
    <div class="auth-shell">
        <div class="auth-visual">
            <div class="auth-visual-content">
                <span class="auth-badge">
                    <span class="material-symbols-outlined">verified_user</span>
                    Seguridad 24/7
                </span>
                <h1>Control y acceso en un solo lugar.</h1>
                <p class="auth-lead">Monitorea ingresos, check-ins y evidencias fotográficas con una experiencia clara en cualquier dispositivo.</p>
                <div class="auth-pill-rail">
                    <span class="auth-pill">Check-ins rápidos</span>
                    <span class="auth-pill">Reportes en minutos</span>
                    <span class="auth-pill">Geolocalización</span>
                </div>
                <div class="hero-stats">
                    <div class="stat-card">
                        <p class="stat-label">Sitios activos</p>
                        <p class="stat-value">18</p>
                    </div>
                    <div class="stat-card">
                        <p class="stat-label">Check-ins hoy</p>
                        <p class="stat-value">132</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="auth-form">
            <div class="auth-panel">
                <span class="panel-chip">Acceso interno</span>
                <h2>Inicia sesión</h2>
                <p class="auth-sub">Continúa con tu correo corporativo para entrar al panel.</p>

                <?php if (!empty($error)): ?>
                    <div class="auth-alert"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
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
