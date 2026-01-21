<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Auth;
use App\Core\Controller;
use App\Models\Checkin;
use App\Models\Photo;
use App\Models\Worksite;

final class WorkerController extends Controller
{
    public function dashboard(): void
    {
        Auth::requireRole('worker');
        $user = Auth::user();
        $assigned = Worksite::currentForWorker((int)$user['id']);
        $this->view('worker/checkin', compact('assigned'));
    }

    public function checkin(): void
    {
        Auth::requireRole('worker');
        $user = Auth::user();
        $lat = $_POST['lat'] ?? null;
        $lng = $_POST['lng'] ?? null;
        Checkin::start((int)$user['id'], $lat, $lng);
        $this->redirect('/worker');
    }

    public function checkout(): void
    {
        Auth::requireRole('worker');
        $user = Auth::user();
        $lat = $_POST['lat'] ?? null;
        $lng = $_POST['lng'] ?? null;
        Checkin::finish((int)$user['id'], $lat, $lng);
        $this->redirect('/worker');
    }

    public function uploadPhoto(): void
    {
        Auth::requireRole('worker');
        $user = Auth::user();
        if (!isset($_FILES['photo']) || $_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
            $this->redirect('/worker');
        }
        $contents = file_get_contents($_FILES['photo']['tmp_name']);
        Photo::storeLatestForWorker((int)$user['id'], $contents, $_FILES['photo']['type']);
        $this->redirect('/worker');
    }
}
