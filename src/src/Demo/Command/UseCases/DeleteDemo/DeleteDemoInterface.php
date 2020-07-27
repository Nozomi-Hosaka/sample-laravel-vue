<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\DeleteDemo;

interface DeleteDemoInterface
{
    /**
     * @param DeleteDemoInputPort $inputPort
     * @param DeleteDemoOutputPort $outputPort
     */
    public function process(DeleteDemoInputPort $inputPort, DeleteDemoOutputPort $outputPort): void;
}
