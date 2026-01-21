<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\DB;

final class User
{
    public static function findByEmail(string $email): ?array
    {
        $stmt = DB::conn()->prepare('SELECT * FROM users WHERE email = ? LIMIT 1');
        $stmt->execute([$email]);
        $row = $stmt->fetch();
        return $row ?: null;
    }

    public static function allWorkers(): array
    {
        $stmt = DB::conn()->query("SELECT id, name, email FROM users WHERE role = 'worker' ORDER BY name");
        return $stmt->fetchAll();
    }
}
