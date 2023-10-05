<?php
class registeration_model extends CI_Model
{

    public function insertdata($data)
    {
        $this->load->database();
        return $this->db->insert('employee_registration', $data);
    }


    public function get_record()
    {
        $this->load->database();
        return $this->db->get('employee_registration')->result();
    }

    public function receive_segment($data)
    {
        foreach ($data as $p) {
            echo $p . '<br>';
        }
    }

    public function edit_data($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->get('employee_registration')->result();
    }

    public function update_data($data, $id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        return $this->db->update('employee_registration', $data);
    }
}
