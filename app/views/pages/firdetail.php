<?php require_once APPROOT . '/views/inc/header2.php'?>
    <div class="container">
        <div class="fir_detail">
            <a href="<?php echo URLROOT ?>/services/viewfir" class="btn btn-primary"><i class="fas fa-backward"></i> BACK</a>
            <div class="fir_content">
                <h6>Applicant Name: <?php echo $data->name ?></h6>
                <h6>Applicant Email: <?php echo $data->email ?></h6>
                <h6>Applicant Address: <?php echo $data->address ?></h6>
                <h6>Area of Police Station: <?php echo $data->police_station ?></h6>
                <h6>Status of the fir right now: <?php echo $data->status; ?></h6>
                <h6>Fir Applicaton Number: <?php echo $data->fir_number; ?></h6>
                <h6>Fir Applicant Year: <?php echo $data->year; ?></h6>
            </div>
            <a target="_blank" href="<?php echo URLROOT ?>/services/viewpdf" class="btn btn-info"><i class="fas fa-print"></i> print Document</a>
        </div>
    </div>
<?php require_once APPROOT . '/views/inc/footer.php'?>
