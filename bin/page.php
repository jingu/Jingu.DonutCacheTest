<?php

declare(strict_types=1);

use Jingu\DonutCache\Bootstrap;

require dirname(__DIR__) . '/autoload.php';
exit((new Bootstrap())(PHP_SAPI === 'cli' ? 'prod-cli-hal-app' : 'prod-hal-app', $GLOBALS, $_SERVER));
