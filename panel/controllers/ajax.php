<?php
include_once "../../controllers/connection.php";
include_once "main.php";

$ACTION = postParam('action');
switch ($ACTION) {
    case 'remove_from_table':
        $recordId = postParam('recordId');
        $mod = postParam('mod');
        $query = "";
        switch ($mod) {
            case 'exp':
                $query = "DELETE FROM `experience` WHERE `id` = '$recordId'";
                break; // break exp mod case end #
            case 'edu':
                $query = "DELETE FROM `educations` WHERE `id` = '$recordId'";
                break; // break edu mod case end #
            case 'tool_skill':
                $query = "DELETE FROM `skills_tools` WHERE `id` = '$recordId'";
                break; // break tool skill mod case end #
        } // end mod swith
        $result = mysqli_query($con, $query);
        if ($result) {
            echo json_encode(['result' => true]);
        } else {
            echo json_encode(['result' => false]);
        }
        break; //remove from table end #
} // end switch
