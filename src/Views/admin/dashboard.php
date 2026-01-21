<section class="card">
    <h1>Panel Administrador</h1>
    <form method="post" action="/logout">
        <button type="submit">Salir</button>
    </form>
</section>

<section class="card">
    <h2>Asignar lugar de trabajo</h2>
    <form method="post" action="/admin/assign">
        <label>Trabajador</label>
        <select name="worker_id" required>
            <?php foreach ($workers as $w) : ?>
                <option value="<?= (int)$w['id'] ?>"><?= htmlspecialchars($w['name']) ?></option>
            <?php endforeach; ?>
        </select>
        <label>Lugar</label>
        <select name="worksite_id" required>
            <?php foreach ($worksites as $s) : ?>
                <option value="<?= (int)$s['id'] ?>"><?= htmlspecialchars($s['name']) ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Asignar</button>
    </form>
</section>

<section class="card">
    <h2>Actividad reciente</h2>
    <table>
        <thead>
            <tr>
                <th>Trabajador</th>
                <th>Entrada</th>
                <th>Salida</th>
                <th>Lat</th>
                <th>Lng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($activity as $row) : ?>
                <tr>
                    <td><?= htmlspecialchars($row['worker_name']) ?></td>
                    <td><?= htmlspecialchars($row['checkin_time'] ?? '-') ?></td>
                    <td><?= htmlspecialchars($row['checkout_time'] ?? '-') ?></td>
                    <td><?= htmlspecialchars($row['checkin_lat'] ?? '-') ?></td>
                    <td><?= htmlspecialchars($row['checkin_lng'] ?? '-') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a class="button" href="/admin/report">Descargar reporte Excel</a>
</section>
