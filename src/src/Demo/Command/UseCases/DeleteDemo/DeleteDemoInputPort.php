<?php
declare(strict_types=1);

namespace Project\Demo\Command\UseCases\DeleteDemo;

interface DeleteDemoInputPort
{
    /**
     * @return int
     */
    public function id(): int;
}
