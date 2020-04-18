  
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`nama_menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function getMenubyId($id)
    {
        $query = $this->db->get_where('user_menu', ['id' => $id]);
        return $query->row_array();
    }

    public function getSubMenubyId($id)
    {
        $query = $this->db->get_where('user_sub_menu', ['id' => $id]);
        return $query->row_array();
    }

    public function deletingMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');
    }

    public function deletingSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_sub_menu');
    }

    public function editingMenu()
    {
        $data = [
            "nama_menu" => $this->input->post('nama_menu', true),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }

    public function editingSubMenu()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "menu_id" => $this->input->post('menu_id'),
            "url" => $this->input->post('url'),
            "icon" => $this->input->post('icon')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }
}
