<?php

declare(strict_types=1);

namespace Jingu\DonutCache\Resource\Page;

use BEAR\Resource\Annotation\Embed;
use BEAR\Resource\ResourceObject;

class Index extends ResourceObject
{
    /** @var array{greeting: string} */
    public $body;

    #[Embed(rel: 'mainVisual', src: 'app://self/main-visual')]
    public function onGet(string $name = 'BEAR.Sunday'): static
    {
        return $this;
    }
}
