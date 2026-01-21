<?php
?>
<?php
$docRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
$assetBase = file_exists($docRoot . '/assets/app.css') ? '' : (file_exists($docRoot . '/public/assets/app.css') ? '/public' : '');
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control de Seguridad</title>
    <link rel="stylesheet" href="<?= $assetBase ?>/assets/app.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
</head>
<body>
    <main class="container">
        <?php require $viewFile; ?>
    </main>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script src="<?= $assetBase ?>/assets/app.js"></script>
</body>
</html>
