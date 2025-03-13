<?php
defined('BASEPATH') or exit('No direct script access allowed');


class PageController extends CI_Controller
{

    public function index()
    {
        echo "This is the default function of PageContoller";
    }

    public function aboutus()
    {
        echo "I am about page";
    }

    public function details()
    {
        $this->load->view('details.php');
    }

    public function blog($blog_url = '')
    {
        $data['blog_url'] = $blog_url;
        $this->load->view('blogView', $data);
    }

    public function demo()
    {
        $this->load->model('StudentModel');
        $title = $this->StudentModel->demo();
        $data['name'] = $title;
        $this->load->view('demoview',$data);
    }

}
?>