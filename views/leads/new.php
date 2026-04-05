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
                    <label for="first_name">Fist Name</label>
                    <input type="text" name="first_name" id="first_name">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" id="last_name">

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