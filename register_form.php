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

<?php
    $error_message = "";

    if(isset($_REQUEST['btnSubmit'])){ 
        if(empty($_REQUEST['fullname']) or empty($_REQUEST['email'])){
            $error_message = "All inputs are required!";
        } 
    } 
?>

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
    <?php 
        if($error_message != ""){
            echo "Error: $error_message";
        } 
    ?>
    <form action="register_form.php" method="get">
        <label for="">Fullname: </label>
        <input type="text" name="fullname">
        <br>
        <label for="">Email: </label>
        <input type="email" name="email">
        <br>
        <input type="submit" name="btnSubmit">
    </form>

    <?php print_r($_REQUEST); ?>

    

</body>
</html>


<?php
    $error_message = "";

    if(isset($_REQUEST['btnSubmit'])){ 
        if(empty($_REQUEST['fullname']) or empty($_REQUEST['email'])){
            $error_message = "All inputs are required!";
        } elseif(!isset($_REQUEST['terms'])){
            $error_message = "You must accept the terms!";
        } elseif(empty($_REQUEST['role'])){
            $error_message = "Please select a role!";
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registration Form</title>
</head>
<body>

    <?php 
        if($error_message != ""){
            echo "<p style='color:red;'>Error: $error_message</p>";
        } 
    ?>
    <form action="register_form.php" method="get">
        <label for="fullname">Fullname: </label>
        <input type="text" name="fullname" id="fullname" value="<?php echo isset($_REQUEST['fullname']) ? htmlspecialchars($_REQUEST['fullname']) : ''; ?>">
        <br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" value="<?php echo isset($_REQUEST['email']) ? htmlspecialchars($_REQUEST['email']) : ''; ?>">
        <br><br>

        <label for="role">Select Role:</label>
        <select name="role" id="role">
            <option value="">--Select--</option>
            <option value="user" <?php if(isset($_REQUEST['role']) && $_REQUEST['role'] == 'user') echo 'selected'; ?>>User</option>
            <option value="admin" <?php if(isset($_REQUEST['role']) && $_REQUEST['role'] == 'admin') echo 'selected'; ?>>Admin</option>
            <option value="editor" <?php if(isset($_REQUEST['role']) && $_REQUEST['role'] == 'editor') echo 'selected'; ?>>Editor</option>
        </select>
        <br><br>

        <input type="checkbox" name="terms" id="terms" <?php if(isset($_REQUEST['terms'])) echo 'checked'; ?>>
        <label for="terms">I accept the terms and conditions</label>
        <br><br>

        <input type="submit" name="btnSubmit" value="Register">
        <input type="reset" value="Reset">
    </form>

    <pre><?php print_r($_REQUEST); ?></pre>

</body>
</html>
