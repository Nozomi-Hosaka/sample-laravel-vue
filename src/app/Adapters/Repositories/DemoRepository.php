<?php
declare(strict_types=1);

namespace App\Adapters\Repositories;

use App\Models\Demo;
use Project\Demo\DemoCollection;
use Project\Demo\DemoStatus;
use Project\Repositories\DemoRepositoryInterface;
use RuntimeException;

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
     * {@inheritdoc}
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
     * {@inheritdoc}
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

    /**
     * @param int $id
     * @return \Project\Demo\Demo|null
     */
    public function findById(int $id): ?\Project\Demo\Demo
    {
        $demo = $this->model->newQuery()->find($id);

        if ($demo === null) {
            throw new RuntimeException('This demo is not exist.');
        }

        return new \Project\Demo\Demo(
            (int) $demo->getAttribute('id'),
            (string) $demo->getAttribute('name'),
            new DemoStatus((int) $demo->getAttribute('status'))
        );
    }

    /**
     * @param \Project\Demo\Demo $demo
     * @return \Project\Demo\Demo
     */
    public function save(\Project\Demo\Demo $demo): \Project\Demo\Demo
    {
        $demo = $this->model->newQuery()
            ->firstOrNew([
                'id' => $demo->id(),
            ])->fill([
                'name' => $demo->name(),
                'status' => $demo->status()->toInt(),
            ]);
        $result = $demo->save();
        if ($result === false) {
            throw new RuntimeException('This demo cannot save.');
        }
        return new \Project\Demo\Demo(
            (int) $demo->getAttribute('id'),
            (string) $demo->getAttribute('name'),
            new DemoStatus((int) $demo->getAttribute('status'))
        );
    }
}
