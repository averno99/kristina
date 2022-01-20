<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getDataUser()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                    FROM `user` JOIN `user_role`
                    ON `user`.`role_id` = `user_role`.`id`
                ";
        return $this->db->query($query);
    }

    public function editdatauser($id)
    {
        $data = [
            'nama' => htmlspecialchars($this->input->post('nama', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'image' => 'default.png',
            'role_id' => $this->input->post('role_id', true),
            'is_active' => 0,
        ];
        $this->db->where('id', $id);
        return $this->db->update('user', $data);
    }

    public function hapusdatauser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}
