<?php
     $title = "For Loops";
    include 'include/header.php'
?>
    <h1 style = "color : blue"><?php echo $title ?></h1>      

    <?php
            // For Loops
        for($count = 0; $count < 10; $count ++ ){
            echo '<p> Why me? </p>';

        }
        for ($count = 0; $count < 10; $count++){
            echo "<p>The count is: $count</p>";

        }


    ?>
<?php
    require 'include/footer.php'
?>