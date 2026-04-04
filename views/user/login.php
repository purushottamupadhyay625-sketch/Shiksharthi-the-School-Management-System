<html>

<head>
    <title>Shiksharthi</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="image" href="./assets/images/1.png">
    <style>
        body {/*
            background-image: url("/assets/images/background.jpg");
            background-size: 1566px 768px;
            background-repeat: no-repeat;*/
            background-color: lightgray;
        }

        .container {
            display: inline-flex;
            grid-template-columns: 1fr 1fr;
            margin: 210;
            width: 950px;
            height: 250px;
        }

        .lift {
            width: 500px;
            height: 350px;
            text-align: center;
            background-color: #000000;
            border-radius: 5px;
        }
     .right{
           width: 500px; 
           height: 350px;
     }
        label {
            display: inline-grid;
            color: #020202;
            font-size: medium;
            font-style:bold;
        
            margin: 0px;
            text-align: top;
            width: 100px;

        }
      button{
             display:inline-block;
             width:150px ;
             height:30px ;
             margin: 40px;
             text-align: middle;
             border-radius: 5px;
      }
        button[type=submit]:hover {
            background-color:greenyellow;
             }

        h2 {
            text-align: center;
            color:blue ;
            padding: 10px;
        }
    </style>
</head>

<body>

        <div class="container">
            <div class="lift" style="background-color:lightyellow">
                <img src="/assets/images/2.png"style="wight=450px" height="350px">
            </div>
            <div class="right">
                <form action="/pages/home" method="POST">
                    <h2>Login to your account</h2>
                    <label for="Uname">User Name </label>
                    <input type="text" id="Uname" name="user name"><br>
                    <label for="Digite"> Password </label>
                    <input type="password" id="Digite" placeholder="enter password"><br>
                    <button type="submit" value="submit">Login</button>
                </form>
            </div>
</body>

</html>