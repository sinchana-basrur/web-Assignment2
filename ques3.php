<html>
<head>
    <style type="text/css">
    p {
        color:white;
        font-size:50px;
        position: absolute;
        top: 20%;
        left: 40%;
        transform: translate(-50%, -50%);
    }
</style>
</head>
<body>
    <form method="post" action="">
    <table border="1">
        <tr>
            <td colspan="2"> Login Sessions</td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr hidden="">
            <td>count</td>
            <td><input type="number" name="count"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="login" value="Login">
            <input type="submit" name="logout" value="Logout"></td>
        </tr>
    </table>
    </form>
<?php
if(isset ($_POST["login"]))
{
    session_start();
    
    if(($_SESSION["user_name"]==$_POST['username']) && ($_SESSION["password"]=$_POST['password']) && ($_SESSION["count"]>=1))
    {
        $_SESSION['count'] += 1;
        echo "Welcome back ".$_SESSION["user_name"]."<br> 
        You have logged in ".$_SESSION['count'] ." times";
    }
    else 
    {
        $_SESSION["user_name"]=$_POST['username'];
        $_SESSION["password"]=$_POST['password'];
        echo "Hello ".$_SESSION["user_name"];
        $_SESSION['count'] = 1;
        echo"<br>This is your first visit";
    }
}
if(isset ($_POST['logout']))
{
    $_SESSION['count'] = 0;
    echo $_SESSION["user_name"]=$_POST['username'];
    SESSION_unset();
    echo"Logged Out";
}
?>
</body>
</html>