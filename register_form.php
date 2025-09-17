<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register_form.php" method="get">
        <label for="">Fullname: </label>
        <input type="text" name="fullname">
        <br>
        <label for="">Email: </label>
        <input type="email" name="email">
        <br>
        <input type="submit" value="Submit">

    </form>

    <?php print_r($_GET); ?>


    <h1>Name: <?php echo $_GET['fullname']; ?></h1>
    <h1>Email: <?php echo $_GET['email']; ?></h1>

    
</body>
</html>
