<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Auth;
use App\Core\Controller;
use App\Models\Checkin;
use App\Models\User;
use App\Models\Worksite;

final class AdminController extends Controller
{
    public function dashboard(): void
    {
        Auth::requireRole('admin');
        $workers = User::allWorkers();
        $activity = Checkin::latestByWorkers();
        $worksites = Worksite::all();
        $this->view('admin/dashboard', compact('workers', 'activity', 'worksites'));
    }

    public function assignWorksite(): void
    {
        Auth::requireRole('admin');
        $workerId = (int)($_POST['worker_id'] ?? 0);
        $worksiteId = (int)($_POST['worksite_id'] ?? 0);
        if ($workerId && $worksiteId) {
            Worksite::assignToWorker($workerId, $worksiteId);
        }
        $this->redirect('/admin');
    }

    public function report(): void
    {
        Auth::requireRole('admin');
        $rows = Checkin::report();
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="reporte_trabajadores.xls"');
        echo "Trabajador\tEntrada\tSalida\tLatitud\tLongitud\n";
        foreach ($rows as $row) {
            echo implode("\t", [
                $row['worker_name'],
                $row['checkin_time'],
                $row['checkout_time'],
                $row['checkin_lat'],
                $row['checkin_lng'],
            ]) . "\n";
        }
    }
}
