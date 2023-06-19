<?php
class Router
{
    private $module_folder_name = 'modules';
    private $main_module_name = 'index.php?module=main';
    private $modules =
    [
        'main' => 'main.php',
        'setting' => 'setting.php',
        'default' => '404.php'
    ];

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
            $myModules = $this -> modules;
            if (!isset($myModules[$module_value]))
            {
                include_once $folder.'/'.$myModules['default'];
            }
            else
            {
                include_once $folder.'/'.$myModules[$module_value];
            }
        }
    }
}


?>