<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <style>
            *{
                background-color:#F78181;
            }
            .card-body{
                width:380px;
                height:400px;
                top:150px;
                padding-top:50px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .btn1{
                width:75px;
                background-color:white;
            }
        </style>
    </head>
    <body>
        <center>
        <div class="card card-body" style="background-color: #C4C4C4">
            <form class="container" method="get" action="loginnext.php" style="background-color:#C4C4C4">
                <div class="form-group" style="background-color:#C4C4C4">
                <input type="text" class="form-control" name="full_name" placeholder="Enter your name" style="border-color: green;box-shadow:green;"><br>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone number" maxlength=10 style="border-color: green;">
                </div><br><br><br>
                <div class="btn1"><input class="btn btn-outline-success" type="submit" value="Submit"></div>
            </form>
        </div>
        </center>
    </body>
</html>

