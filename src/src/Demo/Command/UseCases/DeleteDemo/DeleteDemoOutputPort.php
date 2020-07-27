<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\DeleteDemo;

use Project\Demo\Demo;

interface DeleteDemoOutputPort
{
    /**
     * @param Demo $demo
     */
    public function output(Demo $demo): void;
}
