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
        } // end mod swith
        $result = mysqli_query($con, $query);
        if ($result) {
            echo json_encode(['result'=>true]);
        } else {
            echo json_encode(['result'=>false]);
        }
        break; //remove from table end #
} // end switch
?>