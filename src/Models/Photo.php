<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\DB;

final class Photo
{
    public static function storeLatestForWorker(int $workerId, string $contents, string $mime): void
    {
        $stmt = DB::conn()->prepare('INSERT INTO photos (worker_id, photo_blob, mime_type, created_at) VALUES (?, ?, ?, NOW())');
        $stmt->execute([$workerId, $contents, $mime]);
    }
}
