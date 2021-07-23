<?php
error_reporting(0);
?>
<?php require_once APPROOT . '/views/inc/header2.php'?>
    <div class="contact">
        <div class="about-heading">
            <img src="<?php echo URLROOT ?>/img/Kolkata_Police_Logo.png" alt="">
            <h1>Puja Permission</h1>
            <p>Kolkata Police LalBazar</p>
        </div>
    </div>
    <div class="container">
        <div class="contact_form">
            <div class="card">

                <h5>Request Form For Puja Permission</h5>
                <form action="<?php echo URLROOT ?>/services/puja_permission" method="post">
                    <div class="form-group">
                        <label for="club_name">Club Name: <sup>*</sup></label>
                        <input type="text" name="club_name" class="form-control form-control-lg <?php echo !empty($data['club_name_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['club_name'] ?>">
                        <span class="invalid-feedback"><?php echo $data['club_name_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="address">Address: <sup>*</sup></label>
                        <input type="text" name="address" class="form-control form-control-lg <?php echo !empty($data['address_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['address_err'] ?>">
                        <span class="invalid-feedback"><?php echo $data['chasis_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="mobile_no">Mobile No: <sup>*</sup></label>
                        <input type="text" name="mobile_no" class="form-control form-control-lg <?php echo !empty($data['mobile_no_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['mobile_no_err'] ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                    </div>

                    <input type="submit" value="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php'?>
