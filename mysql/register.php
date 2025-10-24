<form action="register.php" method="post">
Login: <input type="text" name="login"><br>
Hasło: <input type="password" name="haslo"><br>
<input type ="submit">
</form>
<?php
$servername = "localhost";
$username = "root";   // "root"
$password = "";   // "" 
$dbname = "lukaszzawila";


// Utwórz połączenie
$conn = mysqli_connect($servername, $username, $password, $dbname);

$login = $_POST['login'];
$password = sha1($_POST['haslo']);
$sql="Insert into MyGuests (login, password) values ('$login', '$password')";
echo $sql;
if(mysqli_query($conn, $sql)){
    echo "New user created successfully <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
}
?>