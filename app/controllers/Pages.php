<?php
class Pages extends Controller
{
    public function __construct()
    {
        $this->contactModel = $this->model('contact');
    }

    ## default index method
    public function index()
    {
        $this->view('pages/index');
    }
    ## define about method
    public function about()
    {
        $this->view('pages/about');
    }

    ## define cyber cell
    public function cyber()
    {
        $this->view('pages/cyber');
    }

    ## define traffic management
    public function traffic()
    {
        $this->view('pages/traffic');
    }

    ## define safe drive
    public function safedrive()
    {
        $this->view('pages/safedrive');
    }

    ## define contact
    public function contact()
    {
        // $this->view('pages/contact');
        ## check if the request method is post or not
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // ## load the data variable
            $data = [
                'name' => htmlspecialchars(trim($_POST['name'])),
                'email' => htmlspecialchars(trim($_POST['email'])),
                'reason' => htmlspecialchars(trim($_POST['reason'])),
                'name_err' => '',
                'email_err' => '',
                'reason_err' => '',
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
            if (empty($_POST['reason'])) {
                $data['reason_err'] = 'Please Enter the Reason of Contact';
            }

            ## check if the error fields are empty that mean all the values are passed
            if (empty($data['name_err']) && empty($data['email_err'])) {
                // success
                if ($this->contactModel->addContactRequest($data)) {
                    flash('contact_request', 'Your Contact Request added Successfully');
                    redirect('pages/contact');
                }
            } else {
                //failed
                $this->view('pages/contact', $data);
            }
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'reason' => '',
                'name_err' => '',
                'email_err' => '',
                'reason_err' => '',
            ];
            $this->view('pages/contact', $data);
        }
    }

}
