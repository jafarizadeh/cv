<?php
$select = mysqli_query($GLOBALS['con'], "SELECT * FROM `general_info` WHERE `id` = '1' limit 1");
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
    <h1 class="h3 mb-4 text-gray-800">Public Setting</h1>
    <form method="post">
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="webTitleId">Web Title :</label>
                    <input type="text" class="form-control form-control-user" id="webTitleId" name="webTitle" placeholder="Enter Web Title..." value="<?= $general_info_data['webTitle'] ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="firstNameId">First Name :</label>
                    <input type="text" class="form-control form-control-user" id="firstNameId" name="firstName" placeholder="Enter First Name..." value="<?= $general_info_data['firstName'] ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="lastNameId">Last Name :</label>
                    <input type="text" class="form-control form-control-user" id="lastNameId" name="lastName"  placeholder="Enter last Name..." value="<?= $general_info_data['lastName'] ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="phoneNumberId">Phone Number :</label>
                    <input type="text" class="form-control form-control-user" id="phoneNumberId" name="tel" placeholder="Enter Phone Number..." value="<?= $general_info_data['tel'] ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="emailId">Email Address :</label>
                    <input type="text" class="form-control form-control-user" id="emailId" name="email" placeholder="Enter Email Address..." value="<?= $general_info_data['email'] ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="linkedinId">Linkedin Link :</label>
                    <input type="text" class="form-control form-control-user" id="linkedinId" name="linkedin" placeholder="Enter Linkedin Link..." value="<?= $general_info_data['linkedin'] ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="facebookId">Facebook Link :</label>
                    <input type="text" class="form-control form-control-user" id="facebookId" name="facebook" placeholder="Enter Facebook Link..." value="<?= $general_info_data['facebook'] ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="twitterId">Twitter Link :</label>
                    <input type="text" class="form-control form-control-user" id="twitterId" name="twitter" placeholder="Enter Twitter Link..." value="<?= $general_info_data['twitter'] ?>">
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="githubId">Github Link :</label>
                    <input type="text" class="form-control form-control-user" id="githubId" name="github" placeholder="Enter Ginhub Link..." value="<?= $general_info_data['github'] ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="aboutId">About Text :</label>
                    <textarea class="form-control form-control-user" id="aboutId" name="about" placeholder="Enter about text..." value="<?= $general_info_data['about'] ?>"></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="interestsId">Interests Text :</label>
                    <textarea class="form-control form-control-user" id="fbId" name="interestsId" placeholder="Enter interests text..." value="<?= $general_info_data['interests'] ?>"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="addressId">Address :</label>
                    <textarea class="form-control form-control-user" id="addressId" name="address" placeholder="Enter Postal Address..." value="<?= $general_info_data['address'] ?>"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <input type="submit" name="submitPublicSettingForm" class="btn btn-primary btn-user btn-block" value="Save Public Setting">
            </div>
        </div>

    </form>
    <br>
    <div id="result">
        <?php $status = updatePublicSettingTable(); ?>
        <?php if ($status == 2) : header('location: index.php?module=setting');?>
        <?php elseif ($status == 1) : ?>
            <div class="alert alert-danger">Public Setting Updating Failed!</div>
        <?php endif; ?>
    </div>
</div>