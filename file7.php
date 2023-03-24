<form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="uname"><br>
    <label for="password">Password</label>
    <input type="password" name="pass" id=""><br>

    <input type="submit" name="login" value="login" id="">
</form>
<?php
$username = $_POST['uname'];
$password = $_POST['pass'];

$login = $_POST['login'];
if(isset($login)){
    echo 'Hallo'.$username.'<br> password anda'.$password;
}
?>