<?php
require_once __DIR__ ."/Myapp.php";
require_once __DIR__ ."/myTranslate.php";
require_once __DIR__ ."/simple_html_dom.php";
require_once __DIR__ ."/functions.php";
require_once __DIR__ ."/MyMeta.php";
$modulePath = __DIR__ . "/../Modules";
$modules = myapp()->getModules();
foreach ($modules as $module => $status){
    if(file_exists($modulePath . "/" . $module . "/Helpers/includes.php")){
        include ($modulePath . "/" . $module . "/Helpers/includes.php");
    }
}
