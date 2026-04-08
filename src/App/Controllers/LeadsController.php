<?php

namespace Purushottam\SchoolManagementSystemUi\App\Controllers;

use mysqli;
use Purushottam\SchoolManagementSystemUi\App\Config\DbConfig;

class LeadsController
{
    private mysqli $connection;

    public function __construct()
    {
        $this->connection = DbConfig::getConnection();
    }

    public function get()
    {
        
    }

    public function getAll()
    {
        $sql = "SELECT * FROM leads";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function create()
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        
        $sql = "INSERT INTO leads(fname, lname) VALUES('$fname','$lname')";
        $this->connection->query($sql);
        header('location:/leads');

    }

    public function update() {}

    public function delete() {}
}