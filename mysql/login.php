<form action="login.php" method="post">
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
$sql="SELECT login, password from MyGuests where login='$login'";
if($result =mysqli_query($conn, $sql)){
    $row=mysqli_fetch_assoc($result);
    if($password==$row['password']){
        echo "Zalogowano pomyślnie";
    }
    else{
        echo "Błędne hasło";
    }
}
?>