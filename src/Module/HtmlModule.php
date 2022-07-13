<?php

declare(strict_types=1);

namespace Jingu\DonutCache\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\QiqModule\QiqModule;
use BEAR\QiqModule\QiqRenderer;
use BEAR\Resource\RenderInterface;
use Ray\Di\Scope;

final class HtmlModule extends AbstractAppModule
{
    protected function configure(): void
    {
        $this->bind(RenderInterface::class)->to(QiqRenderer::class)->in(Scope::SINGLETON);
        $this->install(new QiqModule($this->appMeta->appDir . '/var/qiq/template'));
    }
}
