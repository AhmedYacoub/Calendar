<?php 

class Lists extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        // if the user isn't logged in, back to home page
        if ( empty( $this->session->userdata('username') ) ) {
            redirect('home/index');
        }
    }

    public function index() {
        $data['title'] = 'List Page';                        // page title
        $data['list_data'] = $this->List_model->get_lists(); // get all lists in database
        $data['active_class'] = 'lists';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);   
        $this->load->view('lists/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id) {
        $data['title'] = 'List Page';
        $data['task']  = $this->List_model->view_task($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);   
        $this->load->view('lists/view', $data);
        $this->load->view('templates/footer');
    }

    public function addlist() {
        
        $this->form_validation->set_rules('taskName', 'Task Name', 'required|min_length[3]');
        $this->form_validation->set_rules('taskBody', 'Task Description', 'required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Add a Task List';
            $data['active_class'] = 'addlist';
            $data['controller'] = 'lists/addlist';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('lists/addlist_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->List_model->addlist();
            $this->session->set_flashdata('addlist-complete', 'A task has been add to your tasks list!');
            redirect('lists/index');
        }
    }

    public function edit($id = '') {
        $this->form_validation->set_rules('taskName', 'Task Name', 'required|min_length[3]');
        $this->form_validation->set_rules('taskBody', 'Task Description', 'required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Add a Task List';
            $data['task_info'] = $this->List_model->view_task($id);

            $data['active_class'] = 'addlist';
            $data['controller'] = 'lists/edit/'.$id;
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('lists/editlist_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->List_model->editlist($id);
            $this->session->set_flashdata('edit-complete', 'A task has been edit in your tasks list!');
            redirect('lists/index');
        }
    }

    public function delete($id = '') {
        $this->List_model->deletelist($id);
        $this->session->set_flashdata('delete-complete', 'A task has been deleted from your tasks list!');
        redirect('lists/index');
    }

    public function complete($id = '') {
        $this->List_model->complete($id);
        $this->session->set_flashdata('complete', 'A task has been completed!');
        redirect('lists/index');
    }
}