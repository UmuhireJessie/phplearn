<?php

    // connect to databse 
    $conn = mysqli_connect('localhost', 'root', 'jessie@17', 'ninja_pizza');

    // check the connection
    if (!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query from all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    //make query and get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);

    //close the connection
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

<?php include ('template/header.php'); ?>

<h4 class="center grey-text">Pizzas</h4>
<div class="container">
    <div class="row">

        <?php foreach ($pizzas as $pizza) { ?>
            
            <div class="col s6 md3 ">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
                        <div><?php echo htmlspecialchars($pizza['ingredients']) ?></div>
                    </div>
                    <div class="card-action right-align">
                        <a href="#" class="brand-text">more info</a>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>
</div>
    
<?php include ('template/footer.php'); ?>


</html>