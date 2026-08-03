<?php
declare(strict_types=1);

namespace App\Repositories;

final class PropertyRepository
{
    public function featured(): array
    {
        return [
            ['name' => 'Skyline Glass Villa', 'city' => 'Malibu', 'price' => '$18.5M', 'type' => 'Villa', 'beds' => 7, 'area' => '12,400 sq ft'],
            ['name' => 'Aurum Penthouse', 'city' => 'New York', 'price' => '$32M', 'type' => 'Apartment', 'beds' => 5, 'area' => '8,900 sq ft'],
            ['name' => 'Nexus Commerce Tower', 'city' => 'Dubai', 'price' => '$120M', 'type' => 'Commercial', 'beds' => 0, 'area' => '220,000 sq ft'],
        ];
    }
}
