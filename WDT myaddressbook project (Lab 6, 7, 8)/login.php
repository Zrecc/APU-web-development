<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<?php
include("conn.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$username=mysqli_real_escape_string($con,$_POST['username']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$sql="SELECT id FROM users WHERE user_name='$username' and 
user_password='$password'";
if ($result=mysqli_query($con,$sql)) {
// Return the number of rows in result set
$rowcount=mysqli_num_rows($result);
}
    if($rowcount==1) {
        session_start();
        $_SESSION['mySession']=$username;
        header("location: view.php");
    }
    else {
    $error=printf("Your Login Name or Password is invalid. Please re login<br/><br/>");
    }
mysqli_close($con);
}
?>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <div>Username:</div><input type="text" name="username">
        <br><br>
        <div>Password:</div><input type="password" name="password">
        <br><br>
        <input type="submit" value="Login">
        <input type="Reset">
    </form>
    <br><br>
    <div>Not a member? Register <a href="register.html">here</a></div>
</body>
</html>