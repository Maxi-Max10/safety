<?php
declare(strict_types=1);

namespace App\Models;

use App\Core\DB;

final class Checkin
{
    public static function start(int $workerId, ?string $lat, ?string $lng): void
    {
        $stmt = DB::conn()->prepare('INSERT INTO checkins (worker_id, checkin_time, checkin_lat, checkin_lng) VALUES (?, NOW(), ?, ?)');
        $stmt->execute([$workerId, $lat, $lng]);
    }

    public static function finish(int $workerId, ?string $lat, ?string $lng): void
    {
        $stmt = DB::conn()->prepare('UPDATE checkins SET checkout_time = NOW(), checkout_lat = ?, checkout_lng = ? WHERE worker_id = ? AND checkout_time IS NULL ORDER BY checkin_time DESC LIMIT 1');
        $stmt->execute([$lat, $lng, $workerId]);
    }

    public static function latestByWorkers(): array
    {
        $sql = "SELECT u.id as worker_id, u.name as worker_name, c.checkin_time, c.checkout_time, c.checkin_lat, c.checkin_lng
                FROM users u
                LEFT JOIN checkins c ON c.worker_id = u.id
                WHERE u.role = 'worker'
                ORDER BY c.checkin_time DESC";
        $stmt = DB::conn()->query($sql);
        return $stmt->fetchAll();
    }

    public static function report(): array
    {
        $sql = "SELECT u.name as worker_name, c.checkin_time, c.checkout_time, c.checkin_lat, c.checkin_lng
                FROM checkins c
                JOIN users u ON u.id = c.worker_id
                ORDER BY c.checkin_time DESC";
        $stmt = DB::conn()->query($sql);
        return $stmt->fetchAll();
    }
}
