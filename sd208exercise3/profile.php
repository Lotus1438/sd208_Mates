<?php
session_start();
if (isset($_POST["btn"])){

$_SESSION['fname'] = $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['confirm_email'] = $_POST['confirm_email'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['confirm_password'] = $_POST['confirm_password'];

header("Location:profile.php");

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration.css">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    .disInput {
        border: none;
        border-bottom: solid rgb(255, 1, 158) 1px;
        border-radius: 0px;
    }
</style>

<body>
    <div class="bg container-fluid">
        <form method="post" style="width:90%;height: 500px;" action="index.php">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <img class ="mt-4" style = "width:450px;height:450px" src="ezra.png" alt="">
                    </div>
                    <div class="col-sm">
                        <br><br>
                        <input type="text" class="disInput form-control bg-transparent mt-5" value = "<?php echo $_SESSION["fname"]." ".$_SESSION["lname"]?>">
                        <input type="text" class="disInput form-control bg-transparent mt-4" value = "<?php echo $_SESSION["address"]?>">
                        <input type="text" class="disInput form-control bg-transparent mt-4" value = "<?php echo $_SESSION["email"]?>">
                        <input type="text" class="disInput form-control bg-transparent mt-4" value = "<?php echo $_SESSION["password"]?>">
                    </div>
                </div>
            </div>


        </form>
    </div>


    

</body>

</html>

 