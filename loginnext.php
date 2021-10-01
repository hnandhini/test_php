<!DOCTYPE hmtl>
<html>
    <head>
        <title>Hello</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <style>
           .btn1{
                width:95px;
                background-color:white;
            } 
            .card-body{
                width:380px;
                height:400px;
                top:150px;
                padding-top:50px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .shape{
                width:300px;
                background-color:white;
                height: 40px;
                border-radius: 40px;
            }
        </style>
    </head>
    <body style="background-color:#A9F5D0">
    <center>
        <div class="card card-body" style="background-color: #C4C4C4">
        <form class="container" action="loginform.php" style="background-color:#C4C4C4">
        <div class="form-group" style="background-color:#C4C4C4">
        <div class="shape" >Your Name is <label style="background-color:white"><?php echo $_GET['full_name'];?></label></div></div><br>
        <div class="form-group" style="background-color:#C4C4C4">
        <div class="shape">Your Phone Number is <label style="background-color:white"><?php echo $_GET['phone'];?></label></div></div>
        <br><br><br>
        <div class="btn1"><input class="btn btn-outline-success" type="submit" value="Go Backk!"></div>
        </form>
        </div>
    </center>
</body>
</html>