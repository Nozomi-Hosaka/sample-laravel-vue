<?php

declare(strict_types=1);


namespace App\Repositories;


use App\Models\Demo;
use Project\Demo\Query\DemoCollection;
use Project\Demo\Query\DemoStatus;
use Project\Repositories\DemoRepositoryInterface;

class DemoRepository implements DemoRepositoryInterface
{
    /**
     * @var Demo
     */
    private Demo $model;

    /**
     * DemoRepository constructor.
     *
     * @param Demo $model
     */
    public function __construct(Demo $model)
    {
        $this->model = $model;
    }

    /**
     * @inheritDoc
     */
    public function findAll(): DemoCollection
    {
        $demos = Demo::all();

        $demoCollections = new DemoCollection();
        foreach ($demos as $demo) {
            $demoCollections->push(new \Project\Demo\Query\Demo(
                (int)$demo->getAttribute('id'),
                (string)$demo->getAttribute('name'),
                new DemoStatus((int)$demo->getAttribute('status')),
            ));
        }

        return $demoCollections;
    }
}
