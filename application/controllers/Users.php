<?php 

/**
 * Class Users that inherit from CI_Controller Class
 */
class Users extends CI_Controller
{
    // function register, enable users to register and sign-in to the system
    public function register() {

        // Validate the corresponding data from the form.
        // set_rules('input name', 'its real name for error purpose', 'rule1|rule2|rule3');
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name' , 'Last Name' , 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email'     , 'Email'     , 'trim|required|min_length[5]|valid_email');
        $this->form_validation->set_rules('username'  , 'Username'  , 'required|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('password'  , 'Password'  , 'trim|required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');

        // if the form validation wasn't triggred yet, show register form view.
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'My Callendar | Register Page';
            $data['active_class'] = 'register';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/navbar', $data);
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        } 
        // if the form validation was triggred, show success page.
        else {
            $this->User_model->create_member();
            $this->session->set_flashdata('register', 'Register had been successfully completed!');
            redirect('home/index');          
        }
    }

    public function login() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'My Callendar | Home Page';
            $data['active_class'] = 'home';

            $this->load->view('templates/header.php', $data);
            $this->load->view('templates/navbar.php', $data);
            $this->load->view('home', $data);
            $this->load->view('templates/footer.php');
        } else {
            $user_data = $this->User_model->login();
            
            if ($user_data) {
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login-success', 'You are now logged-in as "'.$user_data['username'].'"');
                redirect('home/index');
            } else {
                $this->session->set_flashdata('login-fail', 'Invalid login, please write valid data.');
                redirect('home/index');
            }
        }
    }

    public function logout() {

        // Unset user's session data
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();

        $this->session->set_flashdata('logout', 'You have been logged out!');
        redirect('home/index');
    }
}