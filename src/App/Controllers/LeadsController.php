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
        $date_of_birth =$_POST[ 'date_of_birth'];

        $sql="INSERT INTO leads(fname, lname, date_of_birth, age) VALUES('$fname',' $lname', '$date_of_birth',  TIMESTAMPDIFF(YEAR, date_of_birth, CURDATE()))";
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