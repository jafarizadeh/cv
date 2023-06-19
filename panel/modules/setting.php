<?php
$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `general_info` WHERE `id` = '1' limit 1");
$general_info_data = mysqli_fetch_array($select);

function updatePublicSettingTable ()
{
    if (postParam('submitPublicSettingForm') != null)
    {
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
        
    }
}
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Public Setting</h1>
    <form method="post">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="firstnameId" aria-describedby="emailHelp" placeholder="Enter First Name...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="lastnameId" aria-describedby="emailHelp" placeholder="Enter Last Name...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="phoneId" aria-describedby="emailHelp" placeholder="Enter Phone Number...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="emailId" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="addressId" aria-describedby="emailHelp" placeholder="Enter Postal Address...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="websiteId" aria-describedby="emailHelp" placeholder="Enter Website Address...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="instagramId" aria-describedby="emailHelp" placeholder="Enter Instagram Link...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="linkdinId" aria-describedby="emailHelp" placeholder="Enter Linkdin Link...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="facebookId" aria-describedby="emailHelp" placeholder="Enter Facebook Link...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="twitterId" aria-describedby="emailHelp" placeholder="Enter Twitter Link...">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="githubId" aria-describedby="emailHelp" placeholder="Enter Github Link...">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="" aria-describedby="emailHelp" placeholder="">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="" aria-describedby="emailHelp" placeholder="">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="" aria-describedby="emailHelp" placeholder="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <textarea class="form-control form-control-user" name="about" placeholder="Enter about text..."></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <textarea class="form-control form-control-user" name="intrest" placeholder="Enter intrest text..."></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" name="submitPublicSettingForm" class="btn btn-primary btn-user btn-block" value="Save Public Setting">
            </div>
        </div>
    </form>
</div>