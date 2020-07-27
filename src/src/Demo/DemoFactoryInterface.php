<?php

declare(strict_types=1);

namespace Project\Demo;

interface DemoFactoryInterface
{
    /**
     * @param string $name
     * @param DemoStatus $status
     * @return Demo
     */
    public function newDemo(string $name, DemoStatus $status): Demo;
}
