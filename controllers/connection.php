<?php
$con = mysqli_connect('localhost', 'root', '', 'cv') or die('Connection Lost');

function getGeneralInfo($conection)
{
    $select = mysqli_query($conection, "SELECT * FROM `general_info` LIMIT 1");
    $data = mysqli_fetch_array($select);
    return $data;
}
?>