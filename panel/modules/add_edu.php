<?php
$id = getParam('id');
$isEditPage = false;
if ($id != null) {
    $isEditPage = true;
}
$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `educations` WHERE `id` = '$id' limit 1");
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


function addEduTable()
{
    if (postParam('submitAddEduForm') != null) {
        $title = postParam('title') != null ? postParam('title') : '';
        $sub_title = postParam('subTitle') != null ? postParam('subTitle') : '';
        $content = postParam('content') != null ? postParam('content') : '';
        $from_date = postParam('fromDate') != null ? postParam('fromDate') : '';
        $to_date = postParam('toDate') != null ? postParam('toDate') : '';

        if (!empty($title) && !empty($sub_title) && !empty($content)) {
            $select = mysqli_query($GLOBALS['con'], "INSERT INTO `educations` (`title`, `subtitle`, `content`,
            `fromDate`, `toDate`) VALUES ('$title', '$sub_title', '$content', '$from_date', '$to_date')");

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

function updateEduTable($id)
{
    if (postParam('submitEditEduForm') != null) {
        $title = postParam('title') != null ? postParam('title') : '';
        $sub_title = postParam('subTitle') != null ? postParam('subTitle') : '';
        $content = postParam('content') != null ? postParam('content') : '';
        $from_date = postParam('fromDate') != null ? postParam('fromDate') : '';
        $to_date = postParam('toDate') != null ? postParam('toDate') : '';

        if (!empty($title) && !empty($sub_title) && !empty($content)) {
            $select = mysqli_query($GLOBALS['con'], "UPDATE `educations` SET 
            `title` = '$title', `subtitle` = '$sub_title', `content` = '$content',
            `fromDate` = '$from_date', `toDate` = '$to_date' WHERE `id` = '$id'");

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
        <h1 class="h3 mb-4 text-gray-800">Edit Education</h1>
    <?php else : ?>
        <h1 class="h3 mb-4 text-gray-800">Add Education</h1>
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
                    <label for="subTitleId">sub title :</label>
                    <input type="text" class="form-control form-control-user" id="subTitleId" name="subTitle" placeholder="Enter Sub Title..." value="<?= checkValue('subtitle', $isEditPage, $general_info_data); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="fromDateId">from date :</label>
                    <input type="text" class="form-control form-control-user" id="fromDateId" name="fromDate" placeholder="Date..." value="<?= checkValue('fromDate', $isEditPage, $general_info_data); ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="toDateId">to date :</label>
                    <input type="text" class="form-control form-control-user" id="toDateId" name="toDate" placeholder="Date..." value="<?= checkValue('toDate', $isEditPage, $general_info_data); ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="contentId">content :</label>
                    <textarea class="form-control form-control-user" id="contentId" name="content" placeholder="Enter Content..."><?= checkValue('content', $isEditPage, $general_info_data); ?></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <?php if ($isEditPage) : ?>
                    <input type="submit" name="submitEditEduForm" class="btn btn-primary btn-user btn-block" value="Edit Education">
                <?php else : ?>
                    <input type="submit" name="submitAddEduForm" class="btn btn-primary btn-user btn-block" value="Add Education">
                <?php endif ?>
            </div>
        </div>
    </form>
    <br>
    <div id="result">
        <?php
        if ($isEditPage) {
            $status = updateEduTable($id);
        } else {
            $status = addEduTable();
        }
        ?>
        <?php if ($status == 2) : ?>
            <?php if ($isEditPage) : ?>
                <div class="alert alert-success">Education Edited Successfully.</div>
            <?php else : ?>
                <div class="alert alert-success">Education Added Successfully.</div>
            <?php endif ?>
        <?php elseif ($status == 1) : ?>
            <?php if ($isEditPage) : ?>
                <div class="alert alert-danger">Editing Education Failed!</div>
            <?php else : ?>
                <div class="alert alert-danger">Adding Education Failed!</div>
            <?php endif ?>
        <?php elseif ($status == 3) : ?>
            <div class="alert alert-danger">Please Enter Required Filed!</div>
        <?php endif; ?>
    </div>
</div>