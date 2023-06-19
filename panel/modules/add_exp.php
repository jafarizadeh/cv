<?php
$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `experience` WHERE `id` = '1' limit 1");
$general_info_data = mysqli_fetch_array($select);

function updatePublicSettingTable()
{
    if (postParam('submitPublicSettingForm') != null) {
        $web_title = postParam('webTitle') != null ? postParam('webTitle') : '';
        $first_name = postParam('firstName') != null ? postParam('firstName') : '';
        $last_name = postParam('lastName') != null ? postParam('lastName') : '';
        $telephone_number = postParam('tel') != null ? postParam('tel') : '';

        $email_address = postParam('email') != null ? postParam('email') : '';
        $postal_address = postParam('address') != null ? postParam('adddress') : '';
        $facebook_id = postParam('facebook') != null ? postParam('facebook') : '';
        $linkedin_id = postParam('linkedin') != null ? postParam('linkedin') : '';

        $twitter_id = postParam('twitter') != null ? postParam('twitter') : '';
        $github_id = postParam('github') != null ? postParam('github') : '';
        $about = postParam('about') != null ? postParam('about') : '';
        $interests = postParam('interests') != null ? postParam('interests') : '';

        $select = mysqli_query($GLOBALS['con'], "UPDATE `general_info` SET `webTitle` = '$web_title',
        `firstName` = '$first_name', `lastName` = '$last_name', `tel` = '$telephone_number', 
        `email` = '$email_address', `address` = '$postal_address', `facebook` = '$facebook_id', 
        `linkedin` = '$linkedin_id', `twitter` = '$twitter_id', `github` = '$github_id',
         `about` = '$about', `interests` = '$interests'");

        if ($select) {
            return 2;
        } else {
            return 1;
        }
    } // when clicked is statement
    else {
        return 0;
    }
}
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Add Experience</h1>
    <form method="post">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="fbId">title :</label>
                    <input type="text" class="form-control form-control-user" id="fbId" name="title" placeholder="Enter Title...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="fbId">sub title :</label>
                    <input type="text" class="form-control form-control-user" id="fbId" name="subTitle" placeholder="Enter Sub Title...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="dromDateId">from date :</label>
                    <input type="text" class="form-control form-control-user" id="fromDateId" name="fromDate" placeholder="Date...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="fbId">to date :</label>
                    <input type="text" class="form-control form-control-user" id="toDateId" name="toDate" placeholder="Date...">
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
                <input type="submit" name="submitAddExpForm" class="btn btn-primary btn-user btn-block" value="Add Experiences">
            </div>
        </div>
    </form>
    <br>
    <div id="result">
        <?php $status = updatePublicSettingTable(); ?>
        <?php if ($status == 2) : header('location: index.php?module=setting'); ?>
        <?php elseif ($status == 1) : ?>
            <div class="alert alert-danger">Public Setting Updating Failed!</div>
        <?php endif; ?>
    </div>
</div>