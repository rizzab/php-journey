<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h3>Signup</h3>
    <form action='formhandler.inc.php' method='post'>
        <label for='username'>Username:</label>
        <input type='text' name='username' id='username' required><br>
        
        <label for='password'>Password:</label>
        <input type='password' name='password' id='password' required><br>
        
        <label for='email'>Email:</label>
        <input type='email' name='email' id='email' required><br>
        
        <input type='submit' value='Register'>
    </form>
</body>
</html>
