<?php
class register extends CI_Controller
{
    public function index()
    {
        $this->load->view("login");
    }

    public function employee()
    {
        $this->load->view("registration_form");
    }

    public function savedata()
    {
        extract($_POST);

        $data = [
            'employee_name' => $employee_name,
            'employee_email' => $employee_email,
            'employee_phone_number' => $employee_phone_number
        ];

        $this->load->model('registeration_model');
        $result = $this->registeration_model->insertdata($data);

        if ($result) {
            $res['status'] = 'Successfully inserted!';
            $this->load->view('registration_form', $res);
            // redirect(base_url('register/employee'),$res);
        } else {
            echo ('Error while inserting data');
        }
    }

    public function fetchdata()
    {
        $this->load->model('registeration_model');
        $result['table'] = $this->registeration_model->get_record();
        $this->load->view('display_records', $result);
    }

    public function edit($id)
    {
        $this->load->model('registeration_model');
        $result['data'] = $this->registeration_model->edit_data($id);
        $this->load->view('display_records', $result);
    }

    public function update()
    {
        extract($_POST);
        $id = $employee_id;
        $data = [
            'employee_name' => $name,
            'employee_email' => $email,
            'employee_phone_number' => $phone_number
        ];
        $this->load->model('registeration_model');
        $result = $this->registeration_model->update_data($data, $id);
        if ($result) {
            $this->fetchdata();
        }
    }
}
