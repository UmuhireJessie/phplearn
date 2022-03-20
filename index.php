<?php

    // connect to databse 
    $conn = mysqli_connect('localhost', 'root', 'jessie@17', 'ninja_pizza');

    // check the connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query from all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    //make query and get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);

    //close the connection
    mysqli_close($conn);

    print_r($pizzas);

?>

<!DOCTYPE html>
<html>

<?php include ('template/header.php'); ?>
    
<?php include ('template/footer.php'); ?>


</html>