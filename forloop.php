<?php 
$title = 'Forloop';
include 'includes/header.php'?>
    <h1><?php echo $title ?></h1>
   <?php  
   // for loops 
   for($count = 0; $count < 10; $count++) {
    echo '<p>Hello world</p>';
   }
   for($count = 0; $count < 10; $count++) {
    echo "<p>the count is $count</p>";
   }
   ?> 
<?php 
require 'includes/footer.php'
?>