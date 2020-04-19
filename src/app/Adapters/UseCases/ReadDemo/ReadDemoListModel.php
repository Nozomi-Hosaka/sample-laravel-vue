<?php

declare(strict_types=1);


namespace App\Adapters\UseCases\ReadDemo;


use Project\Demo\DemoCollection;
use Project\Demo\Query\UseCases\GetDemoList\GetDemoQueryOutputPort;

class ReadDemoListModel implements GetDemoQueryOutputPort
{
    /**
     * @var DemoCollection
     */
    private DemoCollection $demoCollection;

    /**
     * @inheritDoc
     */
    public function output(DemoCollection $demoCollection): void
    {
        $this->demoCollection = $demoCollection;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->demoCollection->toArray();
    }
}
