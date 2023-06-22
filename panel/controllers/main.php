<?php
$PANEL_ROUTE_MAIN_ADR = 'index.php?module=';
$HOST_ADR = 'http://localhost/project/cv/';
$HOST_PANEL_ADR = $HOST_ADR.'panel/';
$HOST_PANEL_UPLOAD_ADR = $HOST_PANEL_ADR.'uploads/';

function getParam($param_name)
{
    if (!empty($_GET[$param_name])) {
        $value = $_GET[$param_name];
        return $value;
    } else {
        return null;
    }
}

function postParam($param_name)
{

    if (!empty($_POST[$param_name])) {
        $value = $_POST[$param_name];
        return $value;
    } else {
        return null;
    }
}

function getCurrentModule()
{
    $module = getParam('module');
    if ($module != null) {
        return $module;
    } else {
        return '';
    }
}

function checkModuleInSidebar($index = '')
{
    if (getCurrentModule() == $index) {
        return 'active';
    }
}

function includeByCheck($path, $path404 = "")
{
    if (file_exists($path)) {
        include_once $path;
    } else {
        if ($path404 != '') {
            header("location: $path404");
        }
    }
}
