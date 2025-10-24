<?php
$servername = "localhost";
$username = "root";   // "root"
$password = "";   // "" 


// Utwórz połączenie
$conn = mysqli_connect($servername, $username, $password);


// Sprawdź połączenie
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


echo "Connected successfully";




$database="goetel33";
$sql="CREATE DATABASE $database";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
}
else{
    echo "Error creating database: " . mysqli_error($conn);
}
if(mysqli_select_db($conn, $database)){
    echo "Database $database selected";
}
else{
    echo "Error select database: " . mysqli_error($conn)
;}
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


$sql="INSERT INTO MyGuests(Firstname, lastname, email)
VALUES ('John', 'Pork', 'John@gmail.com')";
   if (mysqli_query($conn, $sql)) {
       echo "New record created successfully <br>";
   } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES
            ('Mary', 'Moe', 'mary@example.com')";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email) VALUES
            ('Julie', 'Dooley', 'julie@example.com')";
    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully <br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
    }
$sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        // Wyświetlanie danych z każdej kolumny
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results <br>";
    }
    $nr_rows=mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . 
$row["firstname"] . " " . $row["lastname"] .  "<br>";

    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Wyświetlanie danych z każdej kolumny
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
    } else {
        echo "0 results <br>";
    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) >0) {
        echo "<table border='1'>";
        echo "<tr><th>Id</th><th>First Name</th><th>Last Name</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results <br>";

    }

    $sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<ul>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<li>id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "</li>";
        }
        echo "</ul>";
    } else {
        echo "0 results <br>";
    }
?>

