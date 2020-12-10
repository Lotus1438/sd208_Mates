<?php
session_start();
if (isset($_POST["btn"])){

header("Location:profile.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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

<body>
    <div class="bg container">
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="POST" style="width:32%" action="login.php">
            <div class="form-group ">
                <label>Email Address</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="pword" class="form-control" required>
            </div>
            <div class="input-group">
                <button type="submit" name="btn" class="btn">Log in</button>
            </div>
            <p>
                Not a member yet? <a href="index.php">Login</a>
            </p>
        </form>
    </div>



</body>

</html>