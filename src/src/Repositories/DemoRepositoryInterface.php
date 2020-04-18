<?php

declare(strict_types=1);

namespace Project\Repositories;

use Project\Demo\Query\DemoCollection;

interface DemoRepositoryInterface
{
    /**
     * @return DemoCollection
     */
    public function findAll(): DemoCollection;
}
