<?php

class StudentModel extends CI_Model {

    private function student_secret()
    {
        return "BCA"; // Returns the student section
    }

    public function student_data()
    {
        $student_Sec = $this->student_secret(); // Get student section

        // Return an object with both values
        return (object) [
            'stud_name' => "Ridita",
            'student_Sec' => $student_Sec
        ];
    }

    public function student_details()
    {
        return (object) [
            'stud_details' => "I am a student"
        ];
    }

    public function student_show($id)
    {
        if($id == 1)
        {
            echo "Student ID: " . $id;
        }
        else{
            echo "Student No 2";

        }
    }

    public function demo()
    {
        $title = "This is a demo title in model";
        return $title;
    }

}

?>
