<?php

declare(strict_types=1);


namespace App\Adapters\Repositories;


use App\Models\Demo;
use Project\Demo\DemoCollection;
use Project\Demo\DemoStatus;
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
            $demoCollections->push(new \Project\Demo\Demo(
                (int) $demo->getAttribute('id'),
                (string) $demo->getAttribute('name'),
                new DemoStatus((int) $demo->getAttribute('status')),
            ));
        }

        return $demoCollections;
    }

    /**
     * @inheritDoc
     */
    public function create(string $name, DemoStatus $status): \Project\Demo\Demo
    {
        $demo = $this->model->newQuery()->create([
            'name' => $name,
            'status' => $status->toInt(),
        ]);

        return new \Project\Demo\Demo(
            (int) $demo->getAttribute('id'),
            (string) $demo->getAttribute('name'),
            new DemoStatus((int) $demo->getAttribute('status'))
        );
    }
}
