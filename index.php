<?php
define('CONTR',__DIR__.'/src/controllers/');
define('VIEWS',__DIR__.'/src/views/');


require 'config.php';

session_start();

$controller=router($routes);
require CONTR.'/'.$controller.'.php';
?>