<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PageController extends CI_Controller {

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
}
?>