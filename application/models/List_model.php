<?php 

class List_model extends CI_Model
{
    private $user;

    public function __construct() {
        @$this->user = $this->session->userdata['id'];
    }

    // get all lists in the database
    public function get_lists() {

        $query = $this->db->get_where('list', array('list_user_id' => $this->user));
        return $query->result_array();
    }

    public function view_task($id) {
        $query = $this->db->get_where('list', array('list_user_id' => $this->user, 'id' => $id));
        return $query->row_array();
    }

    public function addlist() {
        $task_info = array(
            'list_name' => $this->input->post('taskName'),
            'list_body' => $this->input->post('taskBody'),
            'list_user_id' => $this->session->userdata['id']
        );
        $this->db->insert('list', $task_info);
    }

    public function editlist($id = '') {
        $task_info = array(
            'list_name' => $this->input->post('taskName'),
            'list_body' => $this->input->post('taskBody'),
            'list_user_id' => $this->session->userdata['id']
        );
        $this->db->where('id', $id);
        $this->db->update('list', $task_info);
    }

    public function deletelist($id = '') {
        $this->db->delete('list', array('id' => $id, 'list_user_id' => $this->session->userdata['id']));
    }

    public function complete($id = '') {
        $this->db->where('id', $id);
        $this->db->update('list', array('list_status' => 'Completed'));
    }
}