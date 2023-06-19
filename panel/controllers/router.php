<?php
class Router
{
    private $module_folder_name = 'modules';
    private $main_module_name = 'index.php?module=main';
    function Router()
    {

    }

    function route()
    {
        $module_value = getParam('module');
        $folder = $this->module_folder_name;
        if ($module_value == null)
        {
            $main = $this -> main_module_name;
            header("location: $main");
        }
        else
        {
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
}


?>