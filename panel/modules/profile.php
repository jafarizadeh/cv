<?php


function updateProfile()
{
    if (postParam('submitProfileForm') != null) {
        $title = postParam('title') != null ? postParam('title') : '';

        if (!empty($title)) {
            $select = mysqli_query($GLOBALS['con'], "UPDATE `skills` SET 
            `title` = '$title' WHERE `id` = ''");

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

    <h1 class="h3 mb-4 text-gray-800">Profile</h1>

    <form method="post">
        <div class="row">
            <div class="col-3">
                <div class="form-group" style="text-align: center;">
                    <img src="http://localhost/project/cv/img/profile.png" while="150" height="150" style="border-radius: 75px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <input type="file" required class="form-control form-control-user" id="imageId" name="image">
                </div>
            </div>
        </div>
        <div class="col-3">
            <input type="submit" name="submitProfileForm" class="btn btn-primary btn-user btn-block" value="Update Profile">
        </div>
    </form>
    <br>
    <div id="result">
        <?php
        $status = updateProfile();
        ?>
        <?php if ($status == 2) : ?>
            <div class="alert alert-success">Profile Updated Successfully.</div>
        <?php elseif ($status == 1) : ?>
            <div class="alert alert-success">Updating Profile Failed.</div>
        <?php elseif ($status == 3) : ?>
            <div class="alert alert-danger">Please Enter Required Filed!</div>
        <?php endif; ?>
    </div>
</div>