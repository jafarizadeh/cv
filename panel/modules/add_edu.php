<?php
$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `educations` WHERE `id` = '1' limit 1");
$general_info_data = mysqli_fetch_array($select);

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
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Add Education</h1>
    <form method="post">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="titleId">title :</label>
                    <input type="text" class="form-control form-control-user" id="titleId" name="title" placeholder="Enter Title..." value="">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="subTitleId">sub title :</label>
                    <input type="text" class="form-control form-control-user" id="subTitleId" name="subTitle" placeholder="Enter Sub Title..." value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="fromDateId">from date :</label>
                    <input type="text" class="form-control form-control-user" id="fromDateId" name="fromDate" placeholder="Date..." value="">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="toDateId">to date :</label>
                    <input type="text" class="form-control form-control-user" id="toDateId" name="toDate" placeholder="Date..." value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="contentId">content :</label>
                    <textarea class="form-control form-control-user" id="contentId" name="content" placeholder="Enter Content..."></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" name="submitAddEduForm" class="btn btn-primary btn-user btn-block" value="Add Education">
            </div>
        </div>
    </form>
    <br>
    <div id="result">
        <?php $status = addEduTable(); ?>
        <?php if ($status == 2) : ?>
            <div class="alert alert-success">Education Added Successfully.</div>
        <?php elseif ($status == 1) : ?>
            <div class="alert alert-danger">Adding Education Failed!</div>
        <?php elseif ($status == 3) : ?>
            <div class="alert alert-danger">Please Enter Required Filed!</div>
        <?php endif; ?>
    </div>
</div>