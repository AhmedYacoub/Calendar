<?php 

class Home extends CI_Controller
{
    public function index() {

        $data['title'] = 'My Callendar | Home Page';
        $data['active_class'] = 'home';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbar.php', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer.php');
    }

    public function item1() {
        $data['title'] ='My Callendar | item1';
        $data['active_class'] = 'item1';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/navbar.php', $data);
        $this->load->view('item1', $data);
        $this->load->view('templates/footer.php');
    }
}