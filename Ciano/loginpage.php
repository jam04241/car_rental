<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <link rel="stylesheet" href="user_login">
</head>
<body image="img/">
    <h1>User Log-in</h1>
    <form action="loginprocess.php" method="post">

    <label for="username">Username:</label>
    <input type="text" name="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" required><br>
    <input type="submit" value="Login">
    </form>
</body>
</html>