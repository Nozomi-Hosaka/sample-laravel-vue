<?php

declare(strict_types=1);


namespace Project\Demo;


use Project\Repositories\DemoRepositoryInterface;

class DemoFactory implements DemoFactoryInterface
{
    /**
     * @var DemoRepositoryInterface
     */
    private DemoRepositoryInterface $demoRepository;

    /**
     * DemoFactory constructor.
     *
     * @param DemoRepositoryInterface $demoRepository
     */
    public function __construct(DemoRepositoryInterface $demoRepository)
    {
        $this->demoRepository = $demoRepository;
    }

    /**
     * @inheritDoc
     */
    public function newDemo(string $name, DemoStatus $status): Demo
    {
        return $this->demoRepository->create($name, $status);
    }
}
