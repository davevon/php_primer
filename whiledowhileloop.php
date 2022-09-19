<?php 
$title = 'While ,Do-while Loops';
 include 'includes/header.php'?>
    <H1><?php echo $title ?></H1>

    <?php
    $grade = 0;
    //Infinite LOOP
   // while ($grade <10 ){ 
   //echo'<p> i am less than 10</p>';

   // }
   //pre-condition loop
   while ($grade < 10) {  
    echo'<p> i am less than 10</p>';
    $grade++;
   }
   echo'exit Loop!';

    ?>
    <H1>DO-WHILE LOOP</H1>
    <?php 
    //post-condition loop 
    $grade = 0;
    do{
    
        echo'<p> I am do while loop</p>';
        $grade++;
    }
    while ($grade < 10) ;
    echo 'Exit Loop!';

    
    ?>
<?php 
require 'includes/footer.php'
?>