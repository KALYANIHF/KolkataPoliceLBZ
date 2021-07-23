<?php
class Services extends Controller
{
    public function __construct()
    {
        $this->shareModel = $this->model('service');
    }

    ## define view fir
    public function viewfir()
    {
        // $this->view('pages/contact');
        ## check if the request method is post or not
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // ## load the data variable
            $data = [
                'name' => htmlspecialchars(trim($_POST['name'])),
                'email' => htmlspecialchars(trim($_POST['email'])),
                'fir_number' => htmlspecialchars(trim($_POST['fir_number'])),
                'name_err' => '',
                'email_err' => '',
                'fir_err' => '',
            ];
            // sanitize all the varibale of the post request array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            ## validate name value
            if (empty($_POST['name'])) {
                $data['name_err'] = 'Please Enter Your Name';
            }
            ## validate the email
            if (empty($_POST['email'])) {
                $data['email_err'] = 'Please Enter Your Email';
            }

            ## validate reason
            if (empty($_POST['fir_number'])) {
                $data['fir_err'] = 'Please Enter the Fir Number';
            }

            ## check if the error fields are empty that mean all the values are passed
            if (empty($data['name_err']) && empty($data['email_err']) && empty($data['fir_err'])) {
                $result = $this->shareModel->getfir($data);
                $data = $result;
                $this->view('pages/firdetail', $data);
            } else {
                //failed
                $this->view('services/viewfir', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'fir_number' => '',
                'name_err' => '',
                'email_err' => '',
                'fir_err' => '',
            ];
            $this->view('services/viewfir', $data);
        }

    }
    ## define traffic challan
    public function traffic_challan()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // ## load the data variable
            $data = [
                'vehicle_no' => $_POST['vehicle_no'],
                'chasis_no' => $_POST['chasis_no'],
                'email_id' => $_POST['email_id'],
                'mobile_no' => $_POST['mobile_no'],
                'woner_name' => $_POST['woner_name'],
                'vehicle_no_err' => '',
                'chasis_err' => '',
                'email_err' => '',
                'mobile_err' => '',
                'woner_err' => '',
            ];

            // sanitize all the varibale of the post request array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            ## validate vehicle no value
            if (empty($_POST['vehicle_no'])) {
                $data['vehicle_no_err'] = 'Please Enter Vehicle No';
            }
            ## validate the chasis no
            if (empty($_POST['chasis_no'])) {
                $data['chasis_err'] = 'Please Enter Chasis No';
            }

            ## validate email id
            if (empty($_POST['email_id'])) {
                $data['email_err'] = 'Please Enter Email Id';
            }

            ## validate mobile no
            if (empty($_POST['mobile_no'])) {
                $data['mobile_err'] = "Please Enter Mobile No";
            }

            ## validate woner err
            if (empty($_POST['woner_name'])) {
                $data['woner_err'] = 'Please Enter Vehicle Woner Name';
            }

            ## check if the error fields are empty that mean all the values are passed
            if (empty($data['vehicle_no_err']) && empty($data['chasis_err']) && empty($data['email_err']) && empty($data['mobile_err']) && empty($data['woner_err'])) {
                if ($this->shareModel->setchallan($data)) {
                    flash('challan_request', 'Your challan Request added Successfully');
                    redirect('services/traffic_challan');
                }

            } else {
                //failed
                $this->view('services/traffic_challan', $data);
            }
        } else {
            $data = [
                'vehicle_no' => '',
                'chasis_no' => '',
                'email_id' => '',
                'mobile_no' => '',
                'woner_name' => '',
                'vehicle_no_err' => '',
                'chasis_err' => '',
                'email_err' => '',
                'mobile_err' => '',
                'woner_err' => '',
            ];
            $this->view('services/traffic_challan', $data);
        }

    }
    ## define missing person
    public function missing_person()
    {
        $this->view('services/missing_person');
    }
    ## define puja permission
    public function puja_permission()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // ## load the data variable
            $data = [
                'club_name' => $_POST['club_name'],
                'address' => $_POST['address'],
                'mobile_no' => $_POST['mobile_no'],
                'club_name_err' => '',
                'address_err' => '',
                'mobile_no_err' => '',
            ];

            // sanitize all the varibale of the post request array
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            ## validate vehicle no value
            if (empty($_POST['club_name'])) {
                $data['club_name_err'] = 'Please Enter club Name';
            }

            ## validate the chasis no
            if (empty($_POST['address'])) {
                $data['address_err'] = 'Please Enter Address';
            }

            ## validate email id
            if (empty($_POST['mobile_no'])) {
                $data['mobile_no_err'] = 'Please Enter Mobile Number';
            }

            ## check if the error fields are empty that mean all the values are passed
            if (empty($data['club_name_err']) && empty($data['address_err']) && empty($data['mobile_no_err'])) {
                if ($this->shareModel->pujaPermission($data)) {
                    flash('pujaPermission_request', 'Your Puja Permission Request added Successfully');
                    redirect('services/puja_permission');
                }
            } else {
                //failed
                $this->view('services/puja_permission', $data);
            }
        } else {
            $data = [
                'club_name' => '',
                'address' => '',
                'mobile_no' => '',
                'club_name_err' => '',
                'address_err' => '',
                'mobile_no_err' => '',
            ];

            $this->view('services/puja_permission', $data);
        }

    }
    ## define viewpdf
    public function viewpdf()
    {
        $this->view('services/pdfview');
    }
}
