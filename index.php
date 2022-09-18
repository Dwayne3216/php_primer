<?php
    $title = "Index";
    include 'include/header.php'
?>
<h1> Hello HTML - PHP Primer </h1>
<?php
    echo '<p>Hello Big World</p>'; 
    echo '<br/>';
    echo 'This is a tiny world';
    echo '<br/>';


    //declaring a variable
    $name = 'Devil May Cry';
    $cost = '$2500.00';
    // printing the variable 
    echo $name;
    echo $cost;

    echo '<h1>The game of the day is: '.$name.' </h1>';
    echo '<h1>The game of the day cost: '.$cost.' </h1>';
    echo "<h1>The game of the day cost: $cost </h1>";

?>
<button type = "button" class = "btn btn-success">Next</button>
<button type = "button" class = "btn btn-info">Back</button>
<button type = "button" class = "btn btn-primary">Refresh</button>
<a href="https://www.Heroku.com" target="_blank" class="btn btn-dark"> Heroku.com</a>
    
<?php
    require 'include/footer.php'
?>