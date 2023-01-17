<?php
    if(isset($_POST['Email'])){
        include 'connect.php';
        $email=$_POST['Email'];
        $stmt=$con->prepare('INSERT INTO subscribe(email)VALUES(?)');
        $stmt->execute([$email]);
        if($stmt->rowCount()>0){
            header('Location:thank you.php');
            exit;
        }
    }else{
        if($_SERVER['REQUEST_METHOD']=='GET'){
            http_response_code(405);
            echo "405 method not Allowed";die;
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label>Email:</label>
        <input type="text" name="Email">
        <input type="submit" name="subcribe" value="subscribe">
    </form>
</body>

</html>