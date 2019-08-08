<?php
 $server = "localhost";
 $database = "mawingun_mpesa";
 $username = "root";
 $password = "";

$conn =  new mysqli($server,$username, $password, $database);
$stmt = $conn->prepare("SELECT name FROM client_paymentterms");
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);
$trial = json_encode($outp);

echo $trial;
?>