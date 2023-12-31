<?php

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

function isUserLoggedIn()
{
    if (!empty($_SESSION['userLogin'])) {
        $value = $_SESSION['userLogin'];
        if ($value) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
