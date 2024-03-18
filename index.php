<?php

$email = $_REQUEST['email'];
$password = $_REQUEST["password"]

$db = new mysql("localhost", "root", "", "user");
$q = "SELECT * FROM user WHERE email = '$email'";

?>
<form action="index.php" method="get">
    <label for="emailInput">Email</label>
    <input type="email" name="email" id="emailInput">
    <label for="passwordInput">Haslo:</label>
    <input type="password" name="password" id="passwordInput">
    <input type="submit" value="Zaloguj" >

</form>