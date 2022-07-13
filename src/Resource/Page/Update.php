<?php

declare(strict_types=1);

namespace Jingu\DonutCache\Resource\Page;

use BEAR\QueryRepository\DonutRepositoryInterface;
use BEAR\QueryRepository\RepositoryLoggerInterface;
use BEAR\Resource\ResourceObject;

class Update extends ResourceObject
{
    public function __construct(
        private readonly DonutRepositoryInterface $repository,
        private readonly RepositoryLoggerInterface $logger,
    ) {
    }

    public function onPut(): static
    {
        $this->repository->invalidateTags(['test_page', 'test_app']);
        $this->body = ['log' => (string) $this->logger];

        return $this;
    }
}
