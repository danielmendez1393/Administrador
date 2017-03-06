


<?php
session_start();
require_once("../../include/config/config.php");

$sql = "SELECT us.id_usr,us.usr_username, us.usr_nombre, us.usr_apellido, tipo.tusr_nombre FROM ct_usr as us
		inner join ct_tipousr as tipo on us.fk_tipousuario = tipo.tusr_nombre";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>ID</th><th>Name</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?> 