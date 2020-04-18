<?php

declare(strict_types=1);


namespace Project\Demo\Query;


use http\Exception\InvalidArgumentException;

class DemoStatus
{
    /** @var int */
    public const STATUS_ENABLED = 0;

    /** @var int */
    public const STATUS_DISABLED = 1;

    /**
     * @var int
     */
    private int $status;

    /**
     * DemoStatus constructor.
     *
     * @param int $status
     */
    public function __construct(int $status)
    {
        $this->validate($status);
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function toInt(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    private function validate(int $status)
    {
        $expects = [self::STATUS_ENABLED, self::STATUS_DISABLED];
        if (!in_array($status, $expects)) {
            throw new InvalidArgumentException(sprintf('DemoStauts must be %s', implode(' or ', $expects)));
        }
    }
}
