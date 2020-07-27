<?php
declare(strict_types=1);

namespace App\Adapters\UseCases\WriteDemo;

use Project\Demo\Command\UseCases\DeleteDemo\DeleteDemoOutputPort;
use Project\Demo\Demo;

class DeleteDemoModel implements DeleteDemoOutputPort
{
    /**
     * @var Demo
     */
    private Demo $demo;

    /**
     * @param Demo $demo
     */
    public function output(Demo $demo): void
    {
        $this->demo = $demo;
    }

    /**
     * @return Demo
     */
    public function demo(): Demo
    {
        return $this->demo;
    }
}
