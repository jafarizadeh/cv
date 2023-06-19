<?php
function getParam($param_name)
{
    $value = $_GET['$param_name'];
    if (!empty($value))
    {
        return $value;
    }
    else
    {
        return null;
    }
}

function postParam($param_name)
{
    $value = $_POST['$param_name'];
    if (!empty($value))
    {
        return $value;
    }
    else
    {
        return null;
    }
}
?>