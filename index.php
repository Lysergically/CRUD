<?php
include_once('Person.php');
include_once ('User.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/css">
        .resize {
            width: 20%;
        }
    </script>
</head>
<body>
<div class="container border border-dark p-4">
    <form action="users.php" method="post">
        <div class="form-group w-75">
            <input name="firstName" type="text" class="form-control w-25" placeholder="First name">
        </div>
        <div class="form-group w-75">
            <input name="lastName" type="text" class="form-control w-25" placeholder="Last name">
        </div>

        <div class="form-group w-75">
            <input class="form-control w-25" type="text" name="username" placeholder="Username">
        </div>
        <div class="form-group w-75">
            <input class="form-control w-25" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group w-75">
            <input class="form-control w-25" type="text"  name="email"  placeholder="example@mail.com">
        </div>
        <button class="btn btn-dark" type="submit" name="submit">Create</button>
    </form>

</div>


<?php
if(isset($_POST['submit'])) {

    if(!empty($_POST['firstName']) ){
        echo 'OK';
    }
    $pdo = new PDO('mysql:host=localhost;dbname=user','root','');
    $stmt = $pdo->prepare('INSERT INTO users (firstname, lastname, username, password, email) VALUES (?, ?, ?, ?, ?)');
    $first      = $_POST['firstName'];
    $last       = $_POST['lastName'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $email      = $_POST['email'];
    $stmt->bindParam(1, $first,PDO::PARAM_STR);
    $stmt->bindParam(2, $last,PDO::PARAM_STR);
    $stmt->bindParam(3, $username,PDO::PARAM_STR);
    $stmt->bindParam(4, $password,PDO::PARAM_STR);
    $stmt->bindParam(5, $email,PDO::PARAM_STR);
    $stmt->execute();
    $stmt = NULL;
}
?>


<h4></h4>
<h4></h4>
<h4></h4>
<h4></h4>

</body>
</html>
