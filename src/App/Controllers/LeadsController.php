<?php

namespace Purushottam\SchoolManagementSystemUi\App\Controllers;

use Mysql;
use Purushottam\SchoolManagementSystemUi\App\Config\DbConfig;

class LeadsController
{
   private $connection;

    public function __construct()

    {
      $this->connection=DbConfig::getConnection();

    }
    public function get()
    {

    }

    public function getAll()
    {
       $sql ="SELECT * FROM leads";
       $result = $this->connection->query($sql);
       return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create()
    {
        $fname =$_POST['first_name'];
        $lname =$_POST['last_name'];
        $gender =$_POST['gender'];
        $date_of_birth =$_POST[ 'date_of_birth'];
        $age =$_POST['age'];
        $class =$_POST['class'];
        $father_name =$_POST['father_name'];
        $mother_name =$_POST['mother_name'];
        $email =$_POST['email'];
        $contact_no =$_POST['contact_no'];


        $sql="INSERT INTO leads(fname, lname, gender, date_of_birth, age, class, father_name, mother_name, email, contact_no) VALUES('$fname',' $lname', '$gender', '$date_of_birth',  '$age', '$class', '$father_name','$mother_name', '$email', '$contact_no' )";
        $this->connection->query($sql);
        header('location:/leads');

    }

    public function update()
    {

    }

    public function delete()
    {
        
    }
}