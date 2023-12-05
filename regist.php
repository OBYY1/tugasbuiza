
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regist</title>
</head>
<body>
<h2>Silakan Daftar</h2>
<form action="login.php">
        <label for="newUsername">Username Baru:</label>
        <input type="text" id="newUsername" name="newUsername" required><br><br>

        <label for="newPassword">Password Baru:</label>
        <input type="password" id="newPassword" name="newPassword" required><br><br>

    <input type="submit" value="Daftar">

    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    }

    h2 {
        text-align: center;
        margin-top: 20px;
    }

    form {
        background-color: #fff;
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }

    </style>
</form>
</body>
</html>