<?php
$username = $_POST['username'];
$password = $_POST['pass'];
$db = mysqli_connect("localhost", "Zordon", "Zordon123!", "steam-fake");
$sql = "SELECT username FROM users WHERE username = '$username' && password = '$password'";
$clicks = "0";
$result = $db->query($sql);

	
if ((!isset($_POST['username'])) || (!isset($_POST['pass'])))
{
  header('Location: index.php');
  exit();
}

if($result->num_rows > 0) {
    session_start();
    $conn = new mysqli("localhost", "Zordon", "Zordon123!", "steam-fake");
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT username,adminstatus FROM users";
    $result = $conn->query($sql);
    
    $row = $result->fetch_assoc();  
    if($row['adminstatus'] = "0")
    {
        echo "<body bgcolor='green'>";
        echo "<h1 align='center'>Sorry but it seems like you are not a admin</h1>";
        echo "</body>";
    } else {
        
        echo "
        <h1>Hello $username</h1>
        <p>  </p>
        <p>  </p>
        <p>  </p>
        <h5>Account Generator<h5>
        <button onclick='displayIframe()'>generate account</button>
        <div id='iframeDisplay'></div>  
        <script>
        function displayIframe() {
        document.getElementById('iframeDisplay').innerHTML = '<iframe src=\'./gen.php\' height=\'200\' width=\'300\' ></iframe>';

      }
       </script>
        ";
    }
    


} else {
    echo "<body bgcolor='green'>";
    echo "<h1 align='center'>Wrong Password</h1>";
    echo "</body>";
}
?>