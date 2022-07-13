<?php

namespace Jingu\DonutCache\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\Context\ProdModule as PackageProdModule;
use BEAR\QueryRepository\StorageRedisModule;

class ProdModule extends AbstractAppModule
{
    protected function configure()
    {
//        $this->install(new StorageRedisModule('127.0.0.1:6379'));
        $this->install(new PackageProdModule());
    }
}
