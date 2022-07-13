<?php

declare(strict_types=1);

use Jingu\DonutCache\Bootstrap;

require dirname(__DIR__) . '/autoload.php';
exit((new Bootstrap())(PHP_SAPI === 'cli' ? 'prod-cli-html-app' : 'prod-html-app', $GLOBALS, $_SERVER));
