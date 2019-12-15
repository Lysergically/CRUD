<?php
include('index.php');
try {
    $pdo = new PDO('mysql:host=localhost;dbname=user','root','');
    $stmt = $pdo->prepare('select * from users');
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo json_encode($row);
    }
}
catch (PDOException $e){
    $e->getMessage();
}

?>


<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td scope="row">1</td>
        <td><?php echo $user->getFirstName() ?></td>
        <td><?php echo $user->getLastName() ?></td>
        <td><?php echo $user->getUsername() ?></td>
        <td><?php echo $user->getPassword() ?></td>
        <td><?php echo $user->getEmail() ?></td>
    </tr>
    </tbody>
</table>
