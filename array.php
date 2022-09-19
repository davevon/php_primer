<?php 
$title = 'array and printout';
 include 'includes/header.php'?>
    <h1><?php echo $title ?></h1>
    <?php 
    
    // a Variable 

    $num =3 ;

    //an array
//only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,101,2,65,78,4,65,65,68,65,65,657);
    //you can access the values in the subscript of the array using the index.
    echo $numbers [5];
    echo "<p>$numbers[9]<p>";
    $size = count($numbers);
    echo "<p> Arrays numbers is size: $size<p>";
     for ($count = 0; $count < $size;  $count++) {
     echo "<p>$numbers[$count]<p>";}
     ?>
<?php 
require 'includes/footer.php'
?>