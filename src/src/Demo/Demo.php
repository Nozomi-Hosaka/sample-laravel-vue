<?php
declare(strict_types=1);

namespace Project\Demo;

class Demo
{
    /**
     * @var int
     */
    private int $id;

    /**
     * @var string
     */
    private string $name;

    /**
     * @var DemoStatus
     */
    private DemoStatus $status;

    /**
     * Demo constructor.
     *
     * @param int $id
     * @param string $name
     * @param DemoStatus $status
     */
    public function __construct(int $id, string $name, DemoStatus $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return DemoStatus
     */
    public function status(): DemoStatus
    {
        return $this->status;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status->toInt(),
        ];
    }
}
