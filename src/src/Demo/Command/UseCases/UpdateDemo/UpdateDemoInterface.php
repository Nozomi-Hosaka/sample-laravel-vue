<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\UpdateDemo;

interface UpdateDemoInterface
{
    /**
     * @param UpdateDemoInputPort $inputPort
     * @param UpdateDemoOutputPort $outputPort
     */
    public function process(UpdateDemoInputPort $inputPort, UpdateDemoOutputPort $outputPort): void;
}
