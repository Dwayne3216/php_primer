<?php
    $title = "If Statements";
    include 'include/header.php'
?>
    <h1> <?php echo $title ?> </h1>
    <?php 
        //If statement   
        $grade = 20;

        if($grade >= 50){
            echo '<h3 style = "color: green"> You have passed </h3>';
            }
            else 
            {
            echo '<h3 style = "color: red"> Sorry your a failure </h3>';
            }
    
            // IF - ELSE STATEMENT
            $grade = 'F';
            if($grade == 'A'){
                echo '<h2 style = "color: green"> You pass your course </h2>';
            }
            elseif ($grade == 'B')
            {
               echo '<h2 style = "color: red"> You need to do better :( </h2>';
            }
           else
           {
            echo '<h2 style = "color: blue">You need to study more</h2>';

           }
    ?>

    
<?php
    require 'include/footer.php'
?>