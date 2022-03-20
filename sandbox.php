<?php

    // $_SESSION
    if (isset($_POST['submit'])) {

        session_start();

        $_SESSION['name'] = $_POST['name'];

        echo $_SESSION['name'];

        header('Location: index.php');
    }

    

?>

<!DOCTYPE html>
<html">
<head>
    <title>Document</title>
</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="" name="name">
        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>