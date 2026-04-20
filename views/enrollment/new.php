<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form</title>
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
            <h4 class="page-title"> New Enrollment Form</h4>
            <form action="/enrollment/create" method="POST" class="form-col-3">

                <div class="left-registration">
                    <label for="enrollment_no">Addmission number*</label>
                    <input type="number" name="enrollment_no" id="enrollment_no">
                    <label for="enrollment_date">Enrollment Date</label>
                    <input type="date" name="enrollment_date" id="enrollment_date">
                    <label for="section">Sec</label>
                    <input type="text" name="section" id="section">
                    <h3>Student's Personal Details</h3>

                    <label for="first_name">Fist Name*</label>
                    <input type="text" name="first_name" id="first_name" required>
                    <label for="last_name">Last Name*</label>
                    <input type="text" name="last_name" id="last_name" required>
                    <label for="gender">Gender</label>
                    <div class="gender">
                        <select id="Gender" name="Gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="none">None</option>
                        </select>
                    </div>
                    <label for="DOB">Date of Birth(DOB)</label>
                    <input type="date" name="DOB" id="DOB">
                    <label for="password"> Password</label>
                    <input type="password" name="password" id="password">
                    <label for="confrom Password">Confrom Password</label>
                    <input type="Confrom password" name="confrom password" id="password">
                    <label for="email">Email id</label>
                    <input type="email" name="email" id="email">
                    <h3>Miscellaneous Details</h3>
                    <div class="medium-register">
                        <label for="previous_schoolname">Previous School Name</label>
                        <input type="text" name="previous_schoolname" id="previous_schoolname">
                        <label for="previous_class">Previous Class</label>
                        <input type="digite" name="previous_class" id="previous_class">
                    </div>

                   

                </div>
                <div class="right-registration">
                    <label for="class">Class Applied*</label>
                    <select id="class" name="class">
                        <option value="l.k.g">L.K.G</option>
                        <option value="u.k.g">U.K.G</option>
                        <option value="class 1">Class 1</option>
                        <option value="class 2">Class 2</option>
                        <option value="class 3">Class 3</option>
                        <option value="class 4">Class 4</option>
                        <option value="class 5">Class 5</option>
                        <option value="class 6">Class 6</option>
                        <option value="class 7">Class 7</option>
                        <option value="class 8">Class 8</option>
                    </select>
                    <label for="roll_no">Roll no</label>
                    <input type="number" name="roll_no" id="roll_no">
                    <label for="session">Session</label>
                    <input type="digite" name="session" id="session">
                    <h3>Parent's Details</h3>
                    <label for="father_name">Father's Name</label>
                    <input type="text" name="father_name" id="father_name">
                    <label for="Mother_name">Mother's Name</label>
                    <input type="text" name="Mother_name" id="Mother_name">
                    <label for="occupation">Occupation</label>
                    <input type="text" name="occupation" id="occupation">
                    <label for="Connect_number">Connect no</label>
                    <input type="connect_number" name="connect_number" id="connect_number">
                    <label for="State">State</label>
                    <input type="text" name="State" id="State">
                    <label for="city">City</label>
                    <input type="text" name="city" id="city">
                    <label for="strate">Strate</label>
                    <input type="text" name="strate" id="strate">
                    <label for="pin">Pin</label>
                    <input type="number" name="pin" id="pin">
                    <p>If Guardian is:</p>
                    <div class="radio" id="guardian">
                        <lable for="guardian">Father</lable>
                        <input type="radio" name="guardian" id="guardian" value="father">
                        <lable for="guardian">Mother</lable>
                        <input type="radio" name="guardian" id="guardian" value="mother">
                        <lable for="guardian">Other</lable>
                        <input type="radio" name="guardian" id="guardian" value="Other">

                    </div>
                    <h3>Guardian Details</h3>
                    <div class="guardian">
                        <lable for="guardian_name">Guardian Name</lable>
                        <input type="text" name="guardian_name" id="guardian_name">
                        <lable for="guardian_relation">Relation</lable>
                        <input type="text" name="guardian_relation" id="guardian_relation">
                        <lable for="guardian_email">Email</lable>
                        <input type="email" name="guardian_email" id="guardian_email">
                    </div>
                </div>

                <button type="submit" value="submit">Enroll</button>
            </form>
</body>

</html>