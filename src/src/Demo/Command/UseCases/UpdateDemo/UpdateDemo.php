<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\UpdateDemo;

use Project\Repositories\DemoRepositoryInterface;

class UpdateDemo implements UpdateDemoInterface
{
    /**
     * @var DemoRepositoryInterface
     */
    private DemoRepositoryInterface $demoRepository;

    /**
     * UpdateDemo constructor.
     *
     * @param DemoRepositoryInterface $demoRepository
     */
    public function __construct(DemoRepositoryInterface $demoRepository)
    {
        $this->demoRepository = $demoRepository;
    }

    /**
     * @param UpdateDemoInputPort $inputPort
     * @param UpdateDemoOutputPort $outputPort
     */
    public function process(UpdateDemoInputPort $inputPort, UpdateDemoOutputPort $outputPort): void
    {
        $demo = $this->demoRepository->findById($inputPort->id());

        // 更新処理
        $demo->setName($inputPort->name());

        // Entityを更新したら必要に応じてデータストア（MySQLとは限らない。MySQL / redis / firestore）に永続化
        $demo = $this->demoRepository->save($demo);

        $outputPort->output($demo);
    }
}
