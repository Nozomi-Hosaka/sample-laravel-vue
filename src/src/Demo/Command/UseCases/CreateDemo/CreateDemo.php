<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\CreateDemo;

use Project\Demo\DemoFactoryInterface;
use Project\Demo\DemoStatus;

class CreateDemo implements CreateDemoInterface
{
    /**
     * @var DemoFactoryInterface
     */
    private DemoFactoryInterface $demoFactory;

    /**
     * CreateDemo constructor.
     *
     * @param DemoFactoryInterface $demoFactory
     */
    public function __construct(DemoFactoryInterface $demoFactory)
    {
        $this->demoFactory = $demoFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function process(CreateDemoInputPort $inputPort, CreateDemoOutputPort $outputPort): void
    {
        $demo = $this->demoFactory->newDemo($inputPort->name(), new DemoStatus($inputPort->status()));
        $outputPort->output($demo);
    }
}
