<?php

declare(strict_types=1);


namespace Project\Demo\Command\UseCases\CreateDemo;


use Project\Demo\Demo;

interface CreateDemoOutputPort
{
    /**
     * @param Demo $demo
     * @return void
     */
    public function output(Demo $demo): void;
}
