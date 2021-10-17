<?php 
include("./vendor/autoload.php");
// ...

$smarty = new Smarty();
$smarty->assign('msg','Hello Smarty!');
$smarty->display('home.tpl');
?>