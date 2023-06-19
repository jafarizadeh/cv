<?php
class Router
{
    private $module_folder_name = 'modules';
    function Router()
    {

    }

    function route()
    {
        $module_value = getParam('module');
        $folder = $this->module_folder_name;
        switch($module_value)
        {
            case 'main':
                include_once "$folder/main.php";
                break;
            case 'setting':
                break;
            default:
                include_once "$folder/404.php";
                // load 404 page

        }
    }
}


?>