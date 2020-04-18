<?php

declare(strict_types=1);


namespace Project\Demo\Query\UseCases\GetDemoList;


use Project\Demo\Query\DemoCollection;

interface GetDemoQueryOutputPort
{
    /**
     * @param DemoCollection $demoCollection
     */
    public function output(DemoCollection $demoCollection): void;
}
