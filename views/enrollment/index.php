<?php
use Purushottam\SchoolManagementSystemUi\App\Controllers\EnrollmentController;
$enrollmentController = new EnrollmentController;
$enrollments =$enrollmentController->getall();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Enrollment-Dashboard</title>
</head>


<body class="page-container">
    <header class="header">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/includes/header.php"  ?>
    </header>
    <main class="main">
        <aside class="aside">
            <?php include $_SERVER['DOCUMENT_ROOT'] . "/views/includes/aside.php"  ?>
        </aside>
        <div class="main-content">
            <h5 class="page-title">All Enrollments</h5>
            <table class="index-table">
                <a href="/enrollment/new" class="button">New Enrollment</a>
                <thead>
                    <tr>
                        <th> Id</th>
                        <th> Enrollment Date</th>
                        <th> First name</th>
                        <th>last name</th>
                        <th>Date of Birth</th>
                        <th> class</th>
                        <th> Roll no</th>
                        <th>Mother Name</th>
                        <th>Father Name</th>
                        <th>Session</th>
                

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($enrollments as $enrollment) { ?>
                        <tr>
                            <td><?= $enrollment['enrollment_no'] ?></td>
                            <td><?= $enrollment['enrollment_date'] ?></td>
                            <td><?= $enrollment['first_name'] ?></td>
                            <td><?= $enrollment['last_name'] ?></td>
                            <td><?= $enrollment['DOB'] ?></td>
                            <td><?= $enrollment['class'] ?></td>
                            <td><?= $enrollment['roll_no'] ?></td>
                            <td><?= $enrollment['Mother_name'] ?> </td>
                            <td><?= $enrollment['father_name'] ?></td>
                            <td><?= $enrollment['session'] ?></td> 
                            
                            
                        
                        </tr><?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>