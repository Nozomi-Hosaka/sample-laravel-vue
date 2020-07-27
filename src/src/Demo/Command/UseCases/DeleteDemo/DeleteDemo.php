<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\DeleteDemo;

use Project\Demo\DemoStatus;
use Project\Repositories\DemoRepositoryInterface;

class DeleteDemo implements DeleteDemoInterface
{
    /**
     * @var DemoRepositoryInterface
     */
    private DemoRepositoryInterface $demoRepository;

    /**
     * DeleteDemo constructor.
     *
     * @param DemoRepositoryInterface $demoRepository
     */
    public function __construct(DemoRepositoryInterface $demoRepository)
    {
        $this->demoRepository = $demoRepository;
    }

    /**
     * @param DeleteDemoInputPort $inputPort
     * @param DeleteDemoOutputPort $outputPort
     */
    public function process(DeleteDemoInputPort $inputPort, DeleteDemoOutputPort $outputPort): void
    {
        $demo = $this->demoRepository->findById($inputPort->id());

        // 論理削除用の状態を更新
        $demo->setStatus(new DemoStatus(DemoStatus::STATUS_DISABLED));

        // Entityを更新したら必要に応じてデータストア（MySQLとは限らない。MySQL / redis / firestore）に永続化
        $demo = $this->demoRepository->save($demo);

        $outputPort->output($demo);
    }
}
