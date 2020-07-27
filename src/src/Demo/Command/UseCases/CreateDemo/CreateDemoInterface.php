<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\CreateDemo;

interface CreateDemoInterface
{
    /**
     * @param CreateDemoInputPort $inputPort
     * @param CreateDemoOutputPort $outputPort
     */
    public function process(CreateDemoInputPort $inputPort, CreateDemoOutputPort $outputPort): void;
}
