<?php
###關閉錯誤訊息###
//error_reporting(0);
//ini_set('display_errors', 'off');


###MENU_BAR###

$menu_json = file_get_contents('include/menu.json');
$menu_ = json_decode($menu_json,true);



?>