<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\PropertyRepository;

final class HomeController extends Controller
{
    public function index(): void
    {
        $this->view('home/index', [
            'title' => 'LuxEstate — Immersive Luxury Real Estate',
            'properties' => (new PropertyRepository())->featured(),
        ]);
    }
}
