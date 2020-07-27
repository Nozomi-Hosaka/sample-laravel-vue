<?php
declare(strict_types=1);

namespace App\Adapters\UseCases\WriteDemo;

use Project\Demo\Command\UseCases\UpdateDemo\UpdateDemoOutputPort;
use Project\Demo\Demo;

class UpdateDemoModel implements UpdateDemoOutputPort
{
    /**
     * @var Demo
     */
    private Demo $demo;

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
