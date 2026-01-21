<section class="card">
    <h1>Ingreso</h1>
    <?php if (!empty($error)) : ?>
        <div class="alert"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <form method="post" action="/login">
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Contraseña</label>
        <input type="password" name="password" required>
        <button type="submit">Entrar</button>
    </form>
</section>
