<?php
session_start();
ob_start();

$con = mysqli_connect('localhost', 'root', '', 'cv') or die('Connection Lost');

function getGeneralInfo($conection)
{
    $select = mysqli_query($conection, "SELECT * FROM `general_info` LIMIT 1");
    $data = mysqli_fetch_array($select);
    return $data;
}

function getExperience($conection)
{
    $select = mysqli_query($conection, "SELECT * FROM `experience`");
    $data = [];
    while ($row = mysqli_fetch_array($select))
    {
        array_push($data, $row);
    }
    return $data;
}

function getEducations($conection)
{
    $select = mysqli_query($conection, "SELECT * FROM `educations`");
    $data = [];
    while ($row = mysqli_fetch_array($select))
    {
        array_push($data, $row);
    }
    return $data;
}

function getSkills($conection)
{
    $select1 = mysqli_query($conection, "SELECT * FROM `skills`");
    $data1 = [];
    while ($row = mysqli_fetch_array($select1))
    {
        array_push($data1, $row);
    }

    $select2 = mysqli_query($conection, "SELECT * FROM `skills_tools`");
    $data2 = [];
    while ($row = mysqli_fetch_array($select2))
    {
        array_push($data2, $row);
    }

    return ['skills' => $data1, 'tools' => $data2];
}

function getAwards($conection)
{
    $select = mysqli_query($conection, "SELECT * FROM `awards`");
    $data = [];
    while ($row = mysqli_fetch_array($select))
    {
        array_push($data, $row);
    }
    return $data;
}
?>