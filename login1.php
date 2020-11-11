<?php

include "db.php";

$username = $_GET['username'];
$password = $_GET['password'];


$myConn = new DB;


$query = "SELECT * FROM user WHERE username = '$username' ";

$result = $myConn->executeSQL($query);

echo gettype($result);
// todo 4: vermeldt wat de datatype van variabele $result is. Dit kun je met behulp van een ingebouwde php functie doen.

if (!empty($result)) { 
    echo "<br> Login as $username <br>";
    print_r($result); 
} else {
    echo "<br> Invalid login! <br>";
}

?>