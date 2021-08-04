<?php
// use Evas\Web\WebApp as App;
use Evas\Web\WebApp;

// вывод ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// автозагрузчик
include __DIR__ . '/../vendor/evas-php/evas-base/src/Loader.php';
(new Evas\Base\Loader)->useEvas()->dir('app/')->run();

// подгружаем зависимости
WebApp::di()->loadDefinitions('config/di.php');

echo 'Home uri: ' . WebApp::uri() . '<br>';
echo 'Request uri: ' . WebApp::request()->getUri() . '<br>';
