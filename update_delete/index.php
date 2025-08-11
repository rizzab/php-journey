<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Account</title>
</head>
<body>
    <h3>Change Account</h3>
    <form action="userupdate.inc.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>      
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>  
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>    
        <button type="submit">Change Account</button>
    </form>
    <h3>Delete Account</h3>
    <form action="delete.inc.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>      
        <button type="submit">Delete Account</button>
    </form>
    
</body>
</html>
