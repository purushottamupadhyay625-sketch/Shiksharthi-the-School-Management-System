<?php
namespace Purushottam\SchoolManagementSystemUi\App\Controllers;

class AuthenticationController
{
    public function authenticate()
    {
        header("location:/dashboard");
    }
}