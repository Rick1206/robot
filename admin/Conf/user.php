<?php
$config =  require '../config.ini.php';
$array= array(
    'URL_MODEL' =>0,
    //'TMPL_DETECT_THEME' => true,
    'DEFAULT_THEME'=>'',
);
return array_merge($config,$array);
?>

