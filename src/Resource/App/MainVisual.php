<?php

namespace Jingu\DonutCache\Resource\App;

use BEAR\Resource\ResourceObject;

class MainVisual extends ResourceObject
{
    public function onGet(): static
    {
        $this->body = [
            'item' => [
                'a' => 1,
                'b' => 2
            ]
        ];

        return $this;
    }
}
