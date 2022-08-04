<?php
$conn = new mysqli("localhost", "Zordon", "Zordon123!", "steam-fake");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $username = $_GET['username'];
    
    $sql = "SELECT username,password,bannedstatus,joindate,level where username = $username FROM users";
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc(); 
    if($row['bannedstatus'] = "1")
    {
      Header('Location: banned.php');
      die();
    } else {
      Header("Location: store.php?user=$username");
      die();
    }
?>