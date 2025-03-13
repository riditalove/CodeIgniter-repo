<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {
    public function index()
    {
        $this->load->model('StudentModel'); // Load the model
    
        $student = $this->StudentModel->student_data(); // Fetch student data
    
        echo "Student Name: " . $student->stud_name . "<br>"; 
        echo "Student Section: " . $student->student_Sec . "<br>";
    }
    
    public function details()
    {
        $this->load->model('StudentModel'); // Load the model
    
        $student = $this->StudentModel->student_details(); // Fetch student details
    
        echo "Student Details: " . $student->stud_details . "<br>";
    }

    public function show($id)
    {
  
        $this->load->model('StudentModel','studi'); 
        $this->studi->student_show($id);
    }
}