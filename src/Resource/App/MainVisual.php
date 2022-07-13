<?php

namespace Jingu\DonutCache\Resource\App;

use BEAR\QueryRepository\Header;
use BEAR\QueryRepository\RepositoryLoggerInterface;
use BEAR\Resource\ResourceObject;

class MainVisual extends ResourceObject
{
    public function onGet(): static
    {
        $this->body = ['time' => time()];
        $this->headers[Header::SURROGATE_KEY] = 'test_app';

        return $this;
    }
}
