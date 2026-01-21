<section class="card">
    <h1>Panel Trabajador</h1>
    <form method="post" action="/logout">
        <button type="submit">Salir</button>
    </form>
</section>

<section class="card">
    <h2>Lugar asignado</h2>
    <?php if ($assigned) : ?>
        <p><strong><?= htmlspecialchars($assigned['name']) ?></strong></p>
        <p><?= htmlspecialchars($assigned['address']) ?></p>
    <?php else : ?>
        <p>No hay lugar asignado.</p>
    <?php endif; ?>
    <div id="map" class="map"></div>
</section>

<section class="card">
    <h2>Entrada / Salida</h2>
    <form method="post" action="/worker/checkin" class="inline">
        <input type="hidden" name="lat" id="lat">
        <input type="hidden" name="lng" id="lng">
        <button type="submit">Marcar entrada</button>
    </form>
    <form method="post" action="/worker/checkout" class="inline">
        <input type="hidden" name="lat" id="lat2">
        <input type="hidden" name="lng" id="lng2">
        <button type="submit">Marcar salida</button>
    </form>
</section>

<section class="card">
    <h2>Subir foto del lugar</h2>
    <form method="post" action="/worker/photo" enctype="multipart/form-data">
        <input type="file" name="photo" accept="image/*" required>
        <button type="submit">Subir</button>
    </form>
</section>
