<?php

// подключаем файлы ядра
require_once 'lib/model.php';
require_once 'lib/view.php';
require_once 'lib/controller.php';

// роутинг и настройки
require_once 'lib/config.php';
require_once 'lib/route.php';

// запускаем роутинг
Route::start(); 

?>