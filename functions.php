<?php
     $title = "Functions";
    include 'include/header.php'
?>
    <h1 style = "color : blue"><?php echo $title ?></h1>

    <?php
        // defining a function
         
        function writeMessage(){
            echo "<p>This final year is going to take a lot out of me<p/>";

        }
        //Calling a function 
        writeMessage();
        writeMessage();
        echo "<hr/>";
        writeMessage();
        writeMessage();
        writeMessage();

        //function with parameters
        function addFunction($num1, $num2){
            $sum = $num1 + $num2;

            echo "<p> Sum of $num1 and $num2 is: $sum <p/>";

        }

        function changeNum(&$num){
            $num = $num + 10;


        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;

        }

        $num = 2500;
        addFunction(20, 6);
        addFunction(500, $num);

        changeNum($num);
        echo $num . "<br/>";

        $return_value = returnProduct(10, 200);
        echo $return_value . "<br/>";
    ?>
    
    <?php
    require 'include/footer.php'
?>