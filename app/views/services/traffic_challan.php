<?php
error_reporting(0);
?>
<?php require_once APPROOT . '/views/inc/header2.php'?>
    <div class="contact">
        <div class="about-heading">
            <img src="<?php echo URLROOT ?>/img/Kolkata_Police_Logo.png" alt="">
            <h1>Traffic Challan</h1>
            <p>Kolkata Police LalBazar</p>
        </div>
    </div>
    <div class="container">
        <div class="contact_form">
            <div class="card">
                <h6><?php flash('challan_request');?></h6>
                <h5>Your Traffic challan Request Form: </h5>
                <form action="<?php echo URLROOT ?>/services/traffic_challan" method="post">
                    <div class="form-group">
                        <label for="vehicle_no">Vehicle No (With No Space): <sup>*</sup></label>
                        <input type="text" name="vehicle_no" class="form-control form-control-lg <?php echo !empty($data['vehicle_no_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['vehicle_no'] ?>">
                        <span class="invalid-feedback"><?php echo $data['vehicle_no_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="chasis_no">Chasis No: <sup>*</sup></label>
                        <input type="text" name="chasis_no" class="form-control form-control-lg <?php echo !empty($data['chasis_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['chasis_no'] ?>">
                        <span class="invalid-feedback"><?php echo $data['chasis_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email_id">Email: <sup>*</sup></label>
                        <input type="email" name="email_id" class="form-control form-control-lg <?php echo !empty($data['email_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['email_id'] ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="mobile_no">Mobile No: <sup>*</sup></label>
                        <input type="text" name="mobile_no" class="form-control form-control-lg <?php echo !empty($data['mobile_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['mobile_no'] ?>">
                        <span class="invalid-feedback"><?php echo $data['mobile_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="woner_name">Woner Name: <sup>*</sup></label>
                        <input type="text" name="woner_name" class="form-control form-control-lg <?php echo !empty($data['woner_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['woner_name'] ?>">
                        <span class="invalid-feedback"><?php echo $data['woner_err'] ?></span>
                    </div>

                    <input type="submit" value="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php'?>
