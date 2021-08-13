<?php

// 放在最前，是因为可能定义一些预定义常量，比如：YII_DEBUG， YII_ENV

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/define-local.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../config/main.php',
    require __DIR__ . '/../config/main-local.php',
    require __DIR__ . '/../config/web.php',
    require __DIR__ . '/../config/web-local.php'
);

(new yii\web\Application($config))->run();
