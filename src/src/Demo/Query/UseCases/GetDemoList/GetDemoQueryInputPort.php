<?php

declare(strict_types=1);


namespace Project\Demo\Query\UseCases\GetDemoList;


interface GetDemoQueryInputPort
{
    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return int
     */
    public function status(): int;
}
