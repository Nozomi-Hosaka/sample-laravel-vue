<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\CreateDemo;

interface CreateDemoInputPort
{
    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return int
     */
    public function status(): int;
}
