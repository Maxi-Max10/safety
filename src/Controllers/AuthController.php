<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Auth;
use App\Core\Controller;
use App\Models\User;

final class AuthController extends Controller
{
    public function showLogin(): void
    {
        $this->view('auth/login');
    }

    public function login(): void
    {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        $user = User::findByEmail($email);
        if (!$user || !password_verify($password, $user['password_hash'])) {
            $this->view('auth/login', ['error' => 'Credenciales inválidas.']);
            return;
        }

        Auth::login([
            'id' => $user['id'],
            'name' => $user['name'],
            'role' => $user['role'],
        ]);

        if ($user['role'] === 'admin') {
            $this->redirect('/admin');
            return;
        }

        $this->redirect('/worker');
    }

    public function logout(): void
    {
        Auth::logout();
        $this->redirect('/login');
    }
}
