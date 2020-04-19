<?php

declare(strict_types=1);


namespace Project\Demo;


use http\Exception\InvalidArgumentException;

class DemoCollection
{
    /**
     * @var array|Demo[]
     */
    private array $demos;

    /**
     * DemoCollection constructor.
     *
     * @param array $demos
     */
    public function __construct(array $demos = [])
    {
        foreach ($demos as $demo) {
            $this->validate($demo);
        }
        $this->demos = $demos;
    }

    /**
     * @param Demo $demo
     */
    public function push(Demo $demo)
    {
        $this->validate($demo);
        $this->demos[] = $demo;
    }

    /**
     * @return array|Demo[];
     */
    public function toArray(): array
    {
        $demos = [];
        foreach ($this->demos as $demo) {
            $demos[] = $demo->toArray();
        }
        return $demos;
    }

    /**
     * @param Demo $demo
     */
    private function validate(Demo $demo): void
    {
        if (!$demo instanceof Demo) {
            throw new InvalidArgumentException('Demos Item must be Demo type.');
        }
    }
}
