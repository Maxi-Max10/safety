<?php
declare(strict_types=1);

namespace App\Core;

abstract class Controller
{
    protected function view(string $view, array $data = []): void
    {
        extract($data);
        $viewFile = __DIR__ . '/../Views/' . $view . '.php';
        require __DIR__ . '/../Views/layout.php';
    }

    protected function redirect(string $path): void
    {
        header('Location: ' . $path);
        exit;
    }
}
