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
     * @param int $id
     * @return Demo|null
     */
    public function findById(int $id): ?Demo;

    /**
     * @param string $name
     * @param DemoStatus $status
     * @return Demo
     */
    public function create(string $name, DemoStatus $status): Demo;

    /**
     * @param Demo $demo
     * @return Demo
     */
    public function save(Demo $demo): Demo;
}
