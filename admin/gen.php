<?php
$randnum = random_int(2500, 99999);
$generatedusername = "user" . $randnum;

echo "
<h1>Generated Account</h1>
<p>username: $generatedusername</p>
<p>password: GeneratedAccount.js</p>

";

$db = mysqli_connect("localhost", "Zordon", "Zordon123!", "steam-fake");
$sql = "INSERT INTO `users` (`username`, `password`, `joindate`, `level`, `bannedstatus`, `bannedtime`, `Test01PlayTime`, `Test01LastPlay`, `AdminStatus`) VALUES ('$generatedusername', 'GeneratedAccount.js', '2013-05-01', '265', '0', '', '0', '2013-05-01', '0');";
$result = $db->query($sql);
echo "

";
?>