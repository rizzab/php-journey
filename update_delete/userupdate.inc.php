<?php
if($_SERVER["REQUEST_METHOD"]== 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    try{
        require_once 'db.php';
        $query = " UPDATE users SET username=:username, password =:password, email=:email WHERE id=2;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password,$email]);
        echo "Registration successful!";
        $pdo = null; // Close the connection
        $stmt = null; // Close the statement
        header("Location: index.php");

        die();
    }catch{PDOException $e{
        echo "Error: " . $e->getMessage();
    }
    }
}else{
   header("Location: index.php");
    exit();
}
?>
