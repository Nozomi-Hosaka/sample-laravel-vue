<?php
declare(strict_types=1);

namespace Project\Demo\Query\UseCases\GetDemoList;

interface GetDemoQueryInterface
{
    /**
     * @param GetDemoQueryInputPort $inputPort
     * @param GetDemoQueryOutputPort $outputPort
     */
    public function process(GetDemoQueryInputPort $inputPort, GetDemoQueryOutputPort $outputPort): void;
}
