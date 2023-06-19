<?php
class Router
{
    private $module_folder_name = 'modules';
    private $main_module_name = 'index.php?module=main';
    private $path404 = 'index.php?module=404';
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
        $path404 = $this->path404;
        if ($module_value == null) {
            $main = $this->main_module_name;
            header("location: $main");
        } else {
            $myModules = $this->modules;
            if (!isset($myModules[$module_value])) {
                includeByCheck($folder . '/' . $myModules['default'], $path404);
            } else {
                includeByCheck($folder . '/' . $myModules[$module_value], $path404);
            }
        }
    }
}
