<?php require_once APPROOT . '/views/inc/header2.php'?>
<!-- view fir via form -->
    <div class="contact">
        <div class="about-heading">
            <img src="<?php echo URLROOT ?>/img/Kolkata_Police_Logo.png" alt="">
            <h1>Case Fir Status</h1>
            <p>Kolkata Police LalBazar</p>
        </div>
    </div>

    <div class="container">
        <div class="contact_form">
            <div class="card">
                <h5>Get the Detail of Your Fir</h5>
                <form action="<?php echo URLROOT ?>/services/viewfir" method="post">
                    <div class="form-group">
                        <label for="name">Name: <sup>*</sup></label>
                        <input type="text" name="name" class="form-control form-control-lg <?php echo !empty($data['name_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['name'] ?>">
                        <span class="invalid-feedback"><?php echo $data['name_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" name="email" class="form-control form-control-lg <?php echo !empty($data['name_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['email'] ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err'] ?></span>
                    </div>
                    <div class="form-group">
                        <label for="fir_number">Fir Number: <sup>*</sup></label>
                        <input type="text" name="fir_number" class="form-control form-control-lg <?php echo !empty($data['fir_err']) ? 'is-invalid' : '' ?>" id="" value="<?php echo $data['fir_number'] ?>">
                        <span class="invalid-feedback"><?php echo $data['fir_err'] ?></span>
                    </div>
                    <input type="submit" value="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
<!-- end of form -->
<?php require_once APPROOT . '/views/inc/footer.php'?>
