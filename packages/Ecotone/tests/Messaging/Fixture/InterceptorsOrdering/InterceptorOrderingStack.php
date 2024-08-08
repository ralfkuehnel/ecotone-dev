<?php

namespace Test\Ecotone\Messaging\Fixture\InterceptorsOrdering;

use Ecotone\Messaging\MessageHeaders;
use stdClass;

class InterceptorOrderingStack
{
    private array $calls = [];
    public function add(string $name): self
    {
        $this->calls[] = $name;
        return $this;
    }

    public function getCalls(): array
    {
        return $this->calls;
    }

    public function reset(): void
    {
        $this->calls = [];
    }
}