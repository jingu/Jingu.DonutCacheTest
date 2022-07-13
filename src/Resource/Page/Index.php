<?php

declare(strict_types=1);

namespace Jingu\DonutCache\Resource\Page;

use BEAR\QueryRepository\Header;
use BEAR\RepositoryModule\Annotation\CacheableResponse;
use BEAR\Resource\Annotation\Embed;
use BEAR\Resource\ResourceObject;

#[CacheableResponse]
class Index extends ResourceObject
{
    #[Embed(rel: 'mainVisual', src: 'app://self/main-visual')]
    public function onGet(string $name = 'BEAR.Sunday'): static
    {
        $this['time'] = time();
        $this->headers[Header::SURROGATE_KEY] = 'test_page';

        return $this;
    }
}
