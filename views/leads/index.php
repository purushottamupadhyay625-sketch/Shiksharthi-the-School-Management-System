<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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
      <h4 class="page-title">Leads</h4>
      <a href="/leads/new" class="button">New Lead</a>
      <table class="index-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Class</th>
                <th>Contact Number</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
    </div>
  </main>
  <footer class="footer">

  </footer>
</body>

</html>