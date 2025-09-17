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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- get - send data thru url -->
    <!-- post - send data thru http -->

    <form action="register_form.php" method="get">a
        <label for="">Fullname: </label>
        <input type="text" name="fullname">
        <br>
        <label for="">Email: </ladbel>
        <input type="email" name="email">
        <br>
        <input type="submit">
    </form>

    <?php if($_REQUEST['fullname'] == ""){ ?>
        <h1>Name: <?php echo $_REQUEST['fullname']; ?></h1>
        <h1>Email: <?php echo $_REQUEST['email']; ?></h1>
    <?php } ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- get - send data thru url -->
    <!-- post - send data thru http -->

    <form action="register_form.php" method="get">a
        <label for="">Fullname: </label>
        <input type="text" name="fullname">
        <br>
        <label for="">Email: </ladbel>
        <input type="email" name="email">
        <br>
        <input type="submit">
    </form>

    <?php if($_REQUEST['fullname'] == ""){ ?>
        <h1>Name: <?php echo $_REQUEST['fullname']; ?></h1>
        <h1>Email: <?php echo $_REQUEST['email']; ?></h1>
    <?php } ?>
    
    <?php if(isset($_REQUEST['fullname'])){ ?>
        <h1>Name: <?php echo $_REQUEST['fullname']; ?></h1>
        <h1>Email: <?php echo $_REQUEST['email']; ?></h1>
    <?php } ?>
</body>
</html>
