<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <link rel="stylesheet" href="user_login">
</head>
<body image="img/">
    
    <h1>User Input Form</h1>
    <form action="send_data.php" method="post">
        <label for="firstname">First Name:</label>
        <input type="text" name="name" required><br>

        <label for="address">Last Name:</label>
        <input type="text" name="address" required><br>

        <label for="address">Address:</label>
        <textarea id="address" name="lastname" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
