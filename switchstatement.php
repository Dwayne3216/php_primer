<?php
     $title = "Switch Statement";
    include 'include/header.php'
?>
    <h1 style = "color : blue"> <?php echo $title ?></h1>      

    <?php
        $grade = 'B';

        switch ($grade) {
            case 'A':
                echo '<h2 style = "color: green">Congratulations you have passed!!</h2>';
                break;
            case 'B':
                echo "<h2 style = 'color: green'>Congratulations you have almost didn't passed!!</h2>";
                break;
            default:
                echo '<h2 style = "color: red"> Stop wasting time and study</h2>';
                break;
        }


    ?>
    <?php
    require 'include/footer.php'
    ?>