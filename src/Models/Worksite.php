<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\DB;

final class Worksite
{
    public static function all(): array
    {
        $stmt = DB::conn()->query('SELECT id, name, address FROM worksites ORDER BY name');
        return $stmt->fetchAll();
    }

    public static function assignToWorker(int $workerId, int $worksiteId): void
    {
        $stmt = DB::conn()->prepare('REPLACE INTO worker_worksites (worker_id, worksite_id, assigned_at) VALUES (?, ?, NOW())');
        $stmt->execute([$workerId, $worksiteId]);
    }

    public static function currentForWorker(int $workerId): ?array
    {
        $stmt = DB::conn()->prepare('SELECT w.id, w.name, w.address, w.lat, w.lng FROM worker_worksites ww JOIN worksites w ON w.id = ww.worksite_id WHERE ww.worker_id = ? ORDER BY ww.assigned_at DESC LIMIT 1');
        $stmt->execute([$workerId]);
        $row = $stmt->fetch();
        return $row ?: null;
    }
}
