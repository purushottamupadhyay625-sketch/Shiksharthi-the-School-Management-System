<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shiksharthi - New Lead</title>
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
            <h4 class="page-title">New Lead</h4>
            <form action="/leads/create" method="post" class="form-col-2">
                <div>
                    <lable for="persnal details">Persnal Detail</lable>
                    <div class="input-group">
                        <label for="first_name">Fist Name*</label>
                        <input type="text" name="first_name" id="first_name" required>
                        <label for="last_name">Last Name*</label>
                        <input type="text" name="last_name" id="last_name" required>
                    </div>
                    <label for="gender">Gender</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="none">None</option>
                    </select>
                    <label for="Dob">Date of Birth(DOB)</label>
                    <input type="date" name="date_of_birth" id="date_of_birth">
                    <label for="age">Age</label>
                    <input type="age" name="age" id="age">
                    <label for="class">Class</label>
                    <div class="select">
                        <select id="class" name="class">
                            <option value="u.k.g">U.k.g</option>
                            <option value="1st">1st</option>
                            <option value="2st">2st</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="fathers_name">Father's Name</label>
                    <input type="text" name="fathers_name" id="fathers_name">
                    <label for="mother_name">Mother's Name</label>
                    <input type="text" name="mothers_name" id="mother_name">
                    <lable for="email">Email ID</lable>
                    <input type="password" name="Email" id="Email">
                    <label for="contact_no">Contact number</label>
                    <input type="digite" name="contact_no" id="contact_no">
                </div>

                <button>Submit</button>
            </form>
        </div>
    </main>
    <footer class="footer">

    </footer>
</body>

</html>