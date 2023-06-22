<?php
$id = getParam('id');
$isEditPage = false;
if ($id != null) {
    $isEditPage = true;
}

$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `skills` WHERE `id` = '$id' limit 1");
$general_info_data = mysqli_fetch_array($select);

function checkValue($index, $isEditPage, $general_info_data)
{
    if ($isEditPage) {
        if (!empty($general_info_data[$index])) {
            return $general_info_data[$index];
        }
    }
    return "";
}

function addSkillTable()
{
    if (postParam('submitAddSkillForm') != null) {
        $title = postParam('title') != null ? postParam('title') : '';

        if (!empty($title)) {
            $select = mysqli_query($GLOBALS['con'], "INSERT INTO `skills` (`title`) VALUES ('$title')");

            if ($select) {
                return 2;
            } else {
                return 1;
            }
        } else {
            return 3;
        }
    } // when clicked is statement
    else {
        return 0;
    }
}

function updateSkillTable($id)
{
    if (postParam('submitEditSkillForm') != null) {
        $title = postParam('title') != null ? postParam('title') : '';

        if (!empty($title)) {
            $select = mysqli_query($GLOBALS['con'], "UPDATE `skills` SET 
            `title` = '$title' WHERE `id` = '$id'");

            if ($select) {
                return 2;
            } else {
                return 1;
            }
        } else {
            return 3;
        }
    } // when clicked is statement
    else {
        return 0;
    }
}
?>

<div class="container-fluid">
    <?php if ($isEditPage) : ?>
        <h1 class="h3 mb-4 text-gray-800">Edit Skill</h1>
    <?php else : ?>
        <h1 class="h3 mb-4 text-gray-800">Add Skill</h1>
    <?php endif; ?>
    <form method="post">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="titleId">title :</label>
                    <input type="text" class="form-control form-control-user" id="titleId" name="title" placeholder="Enter Title..." value="<?= checkValue('title', $isEditPage, $general_info_data); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <?php if ($isEditPage) : ?>
                    <input type="submit" name="submitEditSkillForm" class="btn btn-primary btn-user btn-block" value="Edit Skill">
                <?php else : ?>
                    <input type="submit" name="submitAddSkillForm" class="btn btn-primary btn-user btn-block" value="Add Skill">
                <?php endif ?>
            </div>
        </div>
    </form>
    <br>
    <div id="result">
        <?php
        if ($isEditPage) {
            $status = updateSkillTable($id);
        } else {
            $status = addSkillTable();
        }
        ?>
        <?php if ($status == 2) : ?>
            <?php if ($isEditPage) : ?>
                <div class="alert alert-success">Skill Edited Successfully.</div>
            <?php else : ?>
                <div class="alert alert-success">Skill Added Successfully.</div>
            <?php endif ?>
        <?php elseif ($status == 1) : ?>
            <?php if ($isEditPage) : ?>
                <div class="alert alert-danger">Editing Skill Failed!</div>
            <?php else : ?>
                <div class="alert alert-danger">Adding Skill Failed!</div>
            <?php endif ?>
        <?php elseif ($status == 3) : ?>
            <div class="alert alert-danger">Please Enter Required Filed!</div>
        <?php endif; ?>
    </div>
</div>