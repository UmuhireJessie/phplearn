<?php

    // connect to databse 
    $conn = mysqli_connect('localhost', 'root', 'jessie@17', 'ninja_pizza');

    // check the connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>

<!DOCTYPE html>
<html>

<?php include ('template/header.php'); ?>
    
<?php include ('template/footer.php'); ?>


</html>