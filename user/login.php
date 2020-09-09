<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "bank";

mysqli_connect($host,$user,$password,$db);

if(isset($_POST['userName'])){
    $uname = $_POST['userName'];
    $pass = $_POST['password'];
    $sqli = "select * from logindetails where userName = '".$uname."' AND password = '".$pass."' limit 1" ;
    $_result = mysqli_query($sqli);

    if(mysqli_num_rows($_result)==1){
        echo "You have successfully logged in";
        exit;
    }
    else{
        echo "You have entered incorrect password";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="shadow p-3 mb-5 bg-white rounded" style="margin:400px ">
            <form action="#" method="POST">
                <h1 style="text-align: center;">LogIn</h1>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" name="userName"><b>User</b></span>
                    </div>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><b>Password</b></span>
                    </div>
                    <input type="password" class="form-control" name="password">
                </div>
                <div>
                    <input type="submit" class="form-control btn-danger">
                </div>
            </form>
        </div>
        
    </body>
</html>