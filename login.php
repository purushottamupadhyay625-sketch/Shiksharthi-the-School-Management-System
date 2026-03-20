<html>

<head>
    <title>Shiksharthi</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="image" href="./assets/images/logo.png">
    <style>
        body {
            background-image: url("/assets/images/background.jpg");
            background-size: 1566px 768px;
            background-repeat: no-repeat;
        }

        .container {
            display: inline-flex;
            grid-template-columns: 1fr 1fr;
            margin: 200px;
            width: 950px;
            height: 250px;

        }

        .lift {
            padding: 50px;
            width: 500px;
            height: 350px;
            text-align: center;
            background-color: #d7d8bb;
            border-radius: 5px;

        }

        label {
            display: inline-grid;
            color: #020202;
            font-size: medium;
            gap: 0px;
            margin: 0px;
            text-align: top;
            width: 100px;
        }

        input[type=submit]:hover {
            background-color: gold;
        }

        h2 {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>

        <div class="container">
            <div class="lift">
            </div>
            <div class="right">
                <form action="/index.php" method="POST">
                    <h2>Please login! </h2>
                    <label for="Uname">User Name </label>
                    <input type="text" id="Uname" name="user name"><br>
                    <label for="Digite"> Password </label>
                    <input type="password" id="Digite" placeholder="enter password"><br>
                    <input type="submit" value="submit">
                </form>
            </div>
</body>

</html>