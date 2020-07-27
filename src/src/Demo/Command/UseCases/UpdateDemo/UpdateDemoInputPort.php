<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\UpdateDemo;

interface UpdateDemoInputPort
{
    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function name(): string;
}
