<?php
function getParam($param_name)
{
    if (!empty($_GET[$param_name]))
    {
        $value = $_GET[$param_name];
        return $value;
    }
    else
    {
        return null;
    }
}

function postParam($param_name)
{
    
    if (!empty($_POST[$param_name]))
    {
        $value = $_POST[$param_name];
        return $value;
    }
    else
    {
        return null;
    }
}
?>