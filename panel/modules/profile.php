<?php


function updateProfile()
{
    if (postParam('submitProfileForm') != null) {
        $uploaded_file = move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/profile.jpg');
        if ($uploaded_file) {
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

    <h1 class="h3 mb-4 text-gray-800">Profile</h1>

    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-3 offset-4">
                <div class="form-group" style="text-align: center;">
                    <img src = "<?=$GLOBALS['HOST_PANEL_UPLOAD_ADR'];?>profile.jpg" while="150" height="150" style="border-radius: 75px;">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-4">
                <div class="form-group">
                    <input type="file" required class="form-control form-control-user" id="imageId" name="image">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3 offset-4">
                <input type="submit" name="submitProfileForm" class="btn btn-primary btn-user btn-block" value="Update Profile">
            </div>
        </div>
    </form>
    <br>
    <div id="result">
        <?php
        $status = updateProfile();
        ?>
        <?php if ($status == 2) : header('location:'.$GLOBALS['PANEL_ROUTE_MAIN_ADR'].'profile');?>
            <div class="alert alert-success">Profile Updated Successfully.</div>
        <?php elseif ($status == 1) : ?>
            <div class="alert alert-danger">Updating Profile Failed.</div>
        <?php endif ?>
    </div>
</div>