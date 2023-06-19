<?php
class Router
{
    function Router()
    {

    }

    function route()
    {
        $module_value = getParam('module');
        switch($module_value)
        {
            case 'main':
                include_once "modules/main.php";
                break;
            case 'setting':
                break;
            default:
                include_once "modules/404.php";
                // load 404 page

        }
    }
}


?>