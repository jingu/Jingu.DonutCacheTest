<?php

declare(strict_types=1);

namespace Jingu\DonutCache\Module;

use BEAR\Dotenv\Dotenv;
use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;

use Ray\PsrCacheModule\CacheDirModule;
use function dirname;

class AppModule extends AbstractAppModule
{
    protected function configure(): void
    {
        (new Dotenv())->load(dirname(__DIR__, 2));
        $this->install(new PackageModule());
        $this->install(new CacheDirModule($this->appMeta->tmpDir));
    }
}
