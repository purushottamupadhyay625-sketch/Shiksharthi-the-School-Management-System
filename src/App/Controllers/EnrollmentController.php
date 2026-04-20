<?php

namespace Purushottam\SchoolManagementSystemUi\App\Controllers;

use Mysql;
use Purushottam\SchoolManagementSystemUi\App\Config\DbConfig;



class EnrollmentController
{
  private $connection;
  public function __construct()
  {
    $this->connection = DbConfig::getConnection();
  }
  public function get() {}
  public function getall()
  {
    $sql = "SELECT * FROM student";
    $result = $this->connection->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
  }
  public function Create()
  {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $enrollment_date=$_POST['enrollment_date'];
    $dob = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Mother_name = $_POST['Mother_name'];
    $father_name  = $_POST['father_name'];
    $occupation  = $_POST['occupation'];
    $connect_number  = $_POST['connect_number'];
    $State = $_POST['State'];
    $city = $_POST['city'];
    $strate = $_POST['strate'];
    $pin = $_POST['pin'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $roll_no = $_POST['roll_no'];
    $session = $_POST['session'];
    $previous_schoolname = $_POST['previous_schoolname'];
    $previous_class = $_POST['previous_class'];
    $guardian =$_POST['guardian'];
    $guardian_name =$_POST['guardian_name'];
    $guardian_relation = $_POST['guardian_relation'];
    $guardian_email =$_POST['guardian_email'];


    $sql ="INSERT INTO student (first_name, last_name, enrollment_date, DOB,  Gender, Mother_name, father_name, occupation, connect_number, State, city, strate, pin, email, password, class, section, roll_no, session, previous_schoolname, previous_class, guardian, guardian_name, guardian_relation, guardian_email ) VALUES ('$fname', '$lname','$enrollment_date', '$dob','$Gender', '$Mother_name', '$father_name', '$occupation', '$connect_number', '$State', '$city', '$strate', '$pin', '$email', '$password', '$class', '$section', '$roll_no', '$session', '$previous_schoolname', '$previous_class', '$guardian', '$guardian_name', '$guardian_relation', '$guardian_email')";
    $this->connection->query($sql);
    header('location:/enrollment');
  }
  public function update() {

  }
  public function delete() {
    
  }
}
