<?php
     $title = "Date and Time Manipulation";
    include 'include/header.php'
?>
    <h1 style = "color : blue"><?php echo $title ?></h1>

    <?php
       $todaydate = getdate(); 
       echo "Today's Date: <br/>";
       echo $todaydate['mday'] . '<br/>'; 
       echo $todaydate['mon'] . '<br/>'; 
       echo $todaydate['year'] . '<br/>'; 
       echo '<br/>';
       //To print current date and time 
       echo "Today's date is: " . $todaydate['mday'] . '/' . $todaydate['mon'] . '/' . $todaydate['year'];
        echo '<br/>';
       echo time();

        print date("m/d/y G.i:s <br>)", time()) . '<br/>';
        print "Today is: ";
        print date("j of F Y, \a\\t g.i a", time());


    ?>


<?php
    require 'include/footer.php'
?>