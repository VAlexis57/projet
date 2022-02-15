<?php

include 'data.php';
function printName()
{
    echo $GLOBALS['data']['firstname'] ."". $GLOBALS['data']['lastname'] ;
}

include 'data.php';
$theme = isset($_GET['theme']) && $_GET['theme'] != '' ? $_GET['theme'] : 'gamorys';
$page = isset($_GET['page']) && $_GET['page'] != '' ? $_GET['page'] : 'template';

if(file_exists('themes/' . $theme . '-theme/' . $page. '.php'))
{
    require 'themes/' . $theme .  '-theme/' . $page. '.php';
}
else
{
    echo "Le thème sélectionné est inexistant !";
}
?>
 <!-- DE VILLENEUVE Alexis