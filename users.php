<?php
include_once('index.php');
try {
    $pdo = new PDO('mysql:host=localhost;dbname=user','root','');
    $stmt = $pdo->prepare('select * from users');
    $stmt->execute();
    $counter = $stmt->rowCount();
    echo "<table class=\"table table-striped\">";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope=\"col\">#</th>
        <th scope=\"col\">First Name</th>
        <th scope=\"col\">Last Name</th>
        <th scope=\"col\">Username</th>
        <th scope=\"col\">Password</th>
        <th scope=\"col\">Email</th>";
    echo "</thead>";
    echo "<tbody>";
    for ($i = 0 ; $i < $counter - 1 ; $i++ ) {
        $row = $stmt->fetch();
        echo "<tr>";
        for ($j = 0; $j <= 5 ; $j++) {

            echo "<td scope=\"row\">".$row[$j]."</td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";

}
catch (PDOException $e){
    $e->getMessage();
}
