<?php
/**
 * Зависимости приложения.
 */
use Evas\Di;
use Evas\Di\Container;

use Evas\Db\Database;
use Evas\Db\DatabaseResolver;
use Evas\Router\Router;
use Evas\Router\RouterResult;
use Evas\Router\Controller;
use Evas\Web\WebRequest;
use Evas\Web\WebResponse;

use Evas\Web\WebApp;

return [
    'request' => Di\createOnce(WebRequest::class),
    'response' => Di\createOnce(WebResponse::class),
    'db' => Di\createOnce(Database::class, 
        [Di\includeFileOnce('config/db.php')]
    ),
    'router' => Di\createOnce(Router::class),
];
