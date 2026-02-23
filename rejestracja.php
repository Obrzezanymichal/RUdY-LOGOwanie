<?php
session_start();

echo $_POST["new-username"];
echo "<br>";
echo $_POST["new-password"];
echo "<br>";
echo $_POST["re-new-password"];
echo "<br><hr><br>";

$password = $_POST["new-password"];
$re_password = $_POST["new-re-password"];
$login = $_POST["new-username"]

if($password == $re_password) {
    $_SESSION["error_msg"] = "Hasła musza byc takie same";

}

$con = mysqli_connect("localhost", "root", "blog");

if ($con->errno) {
    echo "NIE udalo sie polaczyc";
    $con->close();
    exit;
}
$login 

$sql = "SELECT * FROM users WHERE login='" . $_POST["new-username"] . "'";

$result = mysqli_query($on, $sql);

if(mysqli_num_rows($result)>0) {
    $_SESSION["error_msg"] = "taki uzytkownik o tym loginie istnieje!";
} else {
    $sql = "INSERT INTO 'users' ('id', 'login', 'password', 'nickname')
    VALUES (NULL, '$login', '".$password."', 'user".time()."') ";

    $result = mysqli_query($con, $sql);
}

$con->close();

header("Location: index.php");
