<?php
@ $username = $_POST['username'];
$password = $_POST['password'];
$db = mysqli_connect("localhost", "Zordon", "Zordon123!", "steam-fake");
$sql = "SELECT username FROM users WHERE username = '$username' && password = '$password'";
GLOBAL $username;
$result = $db->query($sql);
if ((!isset($_POST['username'])) || (!isset($_POST['password'])))
{
  header('Location: index.php');
  exit();
}
if($result->num_rows > 0) {
    session_start();


    $conn = new mysqli("localhost", "Zordon", "Zordon123!", "steam-fake");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT username,password,bannedstatus,joindate,level FROM users";
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc(); 



    header("Location: store.php?user=$username");
    die();
    echo "<form method='GET'>";
    @ $user = $row['username'];
    @ $level = $row['level'];
    @ $joindate = $row['joindate'];
    echo "</form>";

    
    $conn->close();
    header('Location: store.php');
    die();
} else {
    header('Location: index.php');
    die();
}
?>