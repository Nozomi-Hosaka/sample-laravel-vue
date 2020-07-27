<?php
declare(strict_types=1);

namespace Project\Demo\Query\UseCases\GetDemoList;

use Project\Repositories\DemoRepositoryInterface;

class GetDemoQuery implements GetDemoQueryInterface
{
    /**
     * @var DemoRepositoryInterface
     */
    private DemoRepositoryInterface $demoRepository;

    /**
     * GetDemoQuery constructor.
     *
     * @param DemoRepositoryInterface $demoRepository
     */
    public function __construct(DemoRepositoryInterface $demoRepository)
    {
        $this->demoRepository = $demoRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function process(GetDemoQueryInputPort $inputPort, GetDemoQueryOutputPort $outputPort): void
    {
        $demoCollection = $this->demoRepository->findAll();
        $outputPort->output($demoCollection);
    }
}
