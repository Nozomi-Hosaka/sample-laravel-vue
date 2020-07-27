<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\UpdateDemo;

use Project\Demo\Demo;

interface UpdateDemoOutputPort
{
    /**
     * @param Demo $demo
     */
    public function output(Demo $demo): void;
}
