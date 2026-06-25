<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>SIGNUP FORM</h1>

    <form action="includes/formHandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button>Sign Up</button>
    </form>

    <h1>UPDATE FORM</h1>

    <form action="includes/formUpdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="Email">
        <button>UPDATE</button>
    </form>

    <h1>DELETE FORM</h1>

    <form action="includes/formDelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>DELETE</button>
    </form>


</body>
</html>