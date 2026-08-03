<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Repositories\PropertyRepository;

final class PropertyController extends Controller
{
    public function search(): void
    {
        $this->view('search/index', ['title' => 'Advanced Property Search', 'properties' => (new PropertyRepository())->featured()]);
    }

    public function show(): void
    {
        $this->view('property/show', ['title' => 'Skyline Glass Villa', 'property' => (new PropertyRepository())->featured()[0]]);
    }
}
