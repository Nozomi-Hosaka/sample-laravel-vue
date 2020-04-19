<?php

declare(strict_types=1);


namespace App\Adapters\UseCases\WriteDemo;


use Project\Demo\Command\UseCases\CreateDemo\CreateDemoOutputPort;
use Project\Demo\Demo;

class CreateDemoModel implements CreateDemoOutputPort
{
    /**
     * @var Demo
     */
    private Demo $demo;

    /**
     * @inheritDoc
     */
    public function output(Demo $demo): void
    {
        $this->demo = $demo;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->demo->toArray();
    }
}
