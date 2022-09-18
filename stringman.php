<?php
    $title = "String Manipulation";
    include 'include/header.php'
?>
    <h1 style = "color : blue"><?php echo $title ?></h1>
    
    <?php
        //declaring a variable 
        $phrase1 = "We have come a far way since we started VTDI.";
        $phrase2 = "These classes are now becoming an headache.";

        $name = "Sarah Black";

        //Concatenation of string
        echo "<p>$phrase1   It is now September 2022 and we are almost at the end of the degree program.  $phrase2</p>";
        echo '<br/>';
        
        echo '<hr/>';
        echo '<h2 style = "color : purple">Case Sensitivity</h2>';
        //String transformation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucwords($name).'<br/>';
        
        echo 'Uppercase all: '. strtoupper($name). '<br/>';
        echo 'Lowercase all: '. strtolower('APPLE TREE'). '<br/>';
        echo '<hr/>';

        echo '<h2 style = "color : red">Repeating a Character and Finding a Character</h2>';
        //repeating a string 
        echo 'Repeat Srting: ' . str_repeat('a', 10) . '<br/>';
        //repeating a string with nesting functions 
        echo 'Repeat Srting Upper: ' . strtoupper(str_repeat('a', 10)) . '<br/>';

        echo'Get a Substring: ' . substr($name, 5, 10). '<br/>';
        
        //Get the position of a string
        echo 'Get the position of a string: ' . strpos($name, 'k'). '<br/>';

        echo 'Find Character "H": ' . strchr($name, 'H'). '<br/>';
        echo 'Find Character "a": ' . strchr($name, 'a'). '<br/>';
        echo 'Find Character "b": ' . strchr($name, 'B'). '<br/>';
        echo 'Find Character "c": ' . strchr($name, 'c'). '<br/>';

        //Get the length of a string 
        echo 'String length: '. strlen($name) . '<br/>';

        echo '<hr/>';
        echo '<h2 style = "color : orange">Trimming Spaces</h2>';
        //This is how to trim
        echo 'Without Trim: ' . "S" . " A R A " . "H" . '<br/>';
        echo 'Trim spaces on both sides: ' . "S" . trim(" A R A ") . "H" . '<br/>';
        echo 'Trim spaces to the left: ' . "S" . ltrim("    A R A ") . "H" . '<br/>';
        echo 'Trim spaces to the right: ' . "S" . rtrim(" A R A ") . "H" . '<br/>';
        echo '<hr/>';

        echo ' Replace string with another: ' . str_replace("classes", "courses", $phrase2) . '<br/>';

    ?>



<?php
    require 'include/footer.php'
?>