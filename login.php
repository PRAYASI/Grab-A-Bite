<?php include('loginserver.php')?>
<html>
    <head>
            <title>Grab A Bite</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <noscript>Sorry but your browser don't support this document</noscript>
            <link rel="stylesheet" type="text/css" href="css_style_sheet.css">
    </head>
    <style>
    .column
    {
        box-sizing: content-box;  
        top: 50%;
        width: 370px;
        height: 300px;
        padding: 30px;  
        margin: auto ;
        position: center;
        border-color:#333k;
        border: 5px solid ;
        text-align: center;
    }
    input[type=submit]
    {
        background-color: #00cccc;
        border: none;
        color: #333k;
        padding: 16px 32px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
    }
    </style>
    <body>
    <div class="header">
            <table class="center">
            <tr>
            <td><img class="s" src="Images/icon.png" ></td>
            <td><h1>GRAB A BITE</h1></td>
            </tr>
            </table>
        </div>
        <div class="topnav">
        </div>
        <br>
        <br>
        <div class="column">
            <h1 style="color: #00cccc;">SIGN IN</h1>
            <form action="login.php" method="POST">
            <label for="rego">Registration Number:</label><br>
            <input type="text" id="1" name="regno" placeholder="Enter your registration number here">
            <br>
            <br>
            <label for="password">Password:</label><br>
            <input type="password" id="2" name="password" placeholder="Enter your password here">
            <br>
            <br>
            <input type="Submit" name="Submit" id="Submit" value="Submit">
            </form>   
        </div>
       <div class="footer">
            <p style="color:white;">&#169; Vellore Instutide of Technology, Chennai - GRAB A BITE  </p>
        </div>
    </body>
</html>