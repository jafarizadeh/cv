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
        'add_exp' => 'add_exp.php',
        'exps' => 'exps.php',
        'add_edu' => 'add_edu.php',
        'edus' => 'edus.php',
        'add_tools_skills' => 'add_tools_skills.php',
        'tools_skills' => 'tools_skills.php',
        'add_skill' => 'add_skill.php',
        'skills' => 'skills.php',
        'awards' => 'awards.php',
        'add_award' => 'add_award.php',
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
