<?php require_once APPROOT . '/views/inc/header2.php'?>
    <div class="contact">
        <div class="about-heading">
            <img src="<?php echo URLROOT ?>/img/Kolkata_Police_Logo.png" alt="">
            <h1>Contact Us</h1>
            <p>Kolkata Police LalBazar</p>
        </div>
    </div>
    <div class="contact_info">
        <div class="contact_grid">
            <div class="info">
                <i class="fas fa-phone"></i>
                <h5>Call Us:</h5>
                <p>+61 3 8376 6284</p>
            </div>
        </div>
        <div class="contact_grid">
            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <h5>Address</h5>
                <p>18, Street, Kolkata - 700 001</p>
            </div>
        </div>
        <div class="contact_grid">
            <div class="info">
                <i class="fas fa-envelope-square"></i>
                <h5>Email Us:</h5>
                <p>Support@bestlook.com</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact_form">
            <div class="card">
                <h5>Fill Your details to Contact</h5>
                <form action="<?php echo URLROOT ?>/pages/contact" method="post">
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
                        <label for="reason">Reason: <sup>*</sup></label>
                        <textarea name="reason" class="form-control form-control-lg" id="" cols="30" rows="10" <?php echo $data['reason'] ?>></textarea>
                        <span class="invalid-feedback"><?php echo $data['reason_err'] ?></span>
                    </div>
                    <input type="submit" value="submit" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php'?>
