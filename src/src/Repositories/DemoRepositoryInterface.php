<?php

declare(strict_types=1);

namespace Project\Repositories;

use Project\Demo\Demo;
use Project\Demo\DemoCollection;
use Project\Demo\DemoStatus;

interface DemoRepositoryInterface
{
    /**
     * @return DemoCollection
     */
    public function findAll(): DemoCollection;

    /**
     * @param string $name
     * @param DemoStatus $status
     * @return Demo
     */
    public function create(string $name, DemoStatus $status): Demo;
}
