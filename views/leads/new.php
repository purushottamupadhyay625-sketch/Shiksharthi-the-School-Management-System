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
                    <label for="fname">Fist Name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <button>Submit</button>
                </div>
                <div>
                    <label for="fathers_name">Father's Name</label>
                    <input type="text" name="fathers_name" id="fathers_name">
                </div>
            </form>
        </div>
    </main>
    <footer class="footer">

    </footer>
</body>

</html>