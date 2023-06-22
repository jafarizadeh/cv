<?php
$id = getParam('id');
$isEditPage = false;
if ($id != null) {
    $isEditPage = true;
}

$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `awards` WHERE `id` = '$id' limit 1");
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

function addAwardTable()
{
    if (postParam('submitAddAwardForm') != null) {
        $title = postParam('title') != null ? postParam('title') : '';

        if (!empty($title)) {
            $select = mysqli_query($GLOBALS['con'], "INSERT INTO `awards` (`title`) VALUES ('$title')");

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

function updateAwardTable($id)
{
    if (postParam('submitEditAwardForm') != null) {
        $title = postParam('title') != null ? postParam('title') : '';

        if (!empty($title)) {
            $select = mysqli_query($GLOBALS['con'], "UPDATE `awards` SET 
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
        <h1 class="h3 mb-4 text-gray-800">Edit Award</h1>
    <?php else : ?>
        <h1 class="h3 mb-4 text-gray-800">Add Award</h1>
    <?php endif; ?>
    <form method="post">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="titleId">title :</label>
                    <input type="text" class="form-control form-control-user" id="titleId" name="title" placeholder="Enter Title..." value="<?= checkValue('title', $isEditPage, $general_info_data); ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="linkId">link :</label>
                    <input type="text" class="form-control form-control-user" id="linkId" name="link" placeholder="Enter Link..." value="<?= checkValue('link', $isEditPage, $general_info_data); ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="typeId">Type :</label>
                    <select class="form-control form-control-user" id="typeId" name="type">
                        <option value="award">award</option>
                        <option value="certification">certification</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <?php if ($isEditPage) : ?>
                    <input type="submit" name="submitEditAwardForm" class="btn btn-primary btn-user btn-block" value="Edit Award">
                <?php else : ?>
                    <input type="submit" name="submitAddAwardForm" class="btn btn-primary btn-user btn-block" value="Add Award">
                <?php endif ?>
            </div>
        </div>
    </form>
    <br>
    <div id="result">
        <?php
        if ($isEditPage) {
            $status = updateAwardTable($id);
        } else {
            $status = addAwardTable();
        }
        ?>
        <?php if ($status == 2) : ?>
            <?php if ($isEditPage) : ?>
                <div class="alert alert-success">Award Edited Successfully.</div>
            <?php else : ?>
                <div class="alert alert-success">Award Added Successfully.</div>
            <?php endif ?>
        <?php elseif ($status == 1) : ?>
            <?php if ($isEditPage) : ?>
                <div class="alert alert-danger">Editing Award Failed!</div>
            <?php else : ?>
                <div class="alert alert-danger">Adding Award Failed!</div>
            <?php endif ?>
        <?php elseif ($status == 3) : ?>
            <div class="alert alert-danger">Please Enter Required Filed!</div>
        <?php endif; ?>
    </div>
</div>