<?php
    $title = "Do While Loops";
    include 'include/header.php'
?>
    <h1 style = "color : blue"><?php echo $title ?></h1> 
    
    <?php 
        $grade = 0;
        // Infinite loop
        // while($grade < 10){
        //     echo '<p> I am not the number you want </p>';

        // }

        while($grade < 10) {
            echo '<p> I am not the number you want </p>';
                $grade++;
        }
            echo "<h2 style = 'color: purple'> Stop looping: $grade";
    ?>

    <h1 style = "color : blue">Do While Loop Statement</h1>

    <?php
        do{
            echo '<p> This is a do while loop </p>';
            $grade++;
        }while($grade < 10);
        echo "The count for the do while loop is now: $grade";
    ?>

<?php
    require 'include/footer.php'
?>