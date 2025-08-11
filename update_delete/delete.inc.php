<?php
if($_SERVER["REQUEST_METHOD"]== 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    try{
        require_once 'db.php';
        $query = "DELETE FROM users WHERE username=:username, password=:password;"; 
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
