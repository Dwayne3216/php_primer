<?php
    $title = "Arrays";
    include 'include/header.php'
?>
    <h1 style = "color : blue"> <?php echo $title ?></h1> 

    <?php
    //declaring a variable 
        $num = 3;

    // declaring an array
    // this declaration stores only one datatype
        $numbers = array(1,2,3,4,5,6,7,8,9,10,23,54,2,34,14,6,87,9,4656,45,6,34,5,68);

        echo $numbers [5];
        
        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        
        echo "<p> The size of the array is: $size </p>";


        for($count = 0; $count < $size; $count++){
            echo "<p>number: $numbers[$count]</p>";
        
        }
    ?>

<?php
    require 'include/footer.php'
?>