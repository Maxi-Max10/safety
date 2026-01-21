<section class="login-neo">
    <div class="login-shell">
        <header class="login-header">
            <div class="logo-badge">CS</div>
            <div>
                <div class="brand">SECUREGUARD</div>
                <small>Enterprise Auth v4.2</small>
            </div>
        </header>

        <div class="login-title">
            <h1>Authorize Access</h1>
            <p>Verificá tus credenciales para ingresar al portal seguro.</p>
        </div>

        <?php if (!empty($error)) : ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="post" action="/login" class="login-form-neo">
            <label>Employee ID / Email</label>
            <div class="input-neo">
                <span class="icon">@</span>
                <input type="email" name="email" placeholder="tu@email.com" required>
            </div>

            <label>Password</label>
            <div class="input-neo">
                <span class="icon">●</span>
                <input type="password" name="password" placeholder="••••••••" required>
                <span class="ghost">👁</span>
            </div>

            <div class="login-actions">
                <a href="#" class="link">¿Olvidaste tu contraseña?</a>
            </div>

            <button class="btn-neo" type="submit">AUTHORIZE LOGIN →</button>
        </form>

        <div class="login-divider">BIOMETRIC LOGIN</div>
        <button class="bio-btn" type="button">USE FACE ID</button>

        <div class="login-footer">
            🔒 END-TO-END ENCRYPTED
        </div>
    </div>
</section>
