<?php 
$title = 'Date and Time manipulation';
include 'includes/header.php'?>
    <h1><?php echo $title ?></h1>
    <?php 
    $datenow=getdate();
    echo "Todays Date: <br/>";
    echo$datenow['mday'] . '<br/>';
    echo $datenow['mon']. "</br>";
        echo $datenow['year']."</p>";
    echo "Todays Date: ". $datenow['mday']. '/' . $datenow['mon'] . '/'. $datenow['year'] ."<br/>";
  
  echo time() . '<br/>';
  print date("m/d/y G.i:s<br/>", time()) . '<br/>';
  print("today is ");
  print date("j of F Y, \a\\t g.i a", time());


  ?>
<?php 
require 'includes/footer.php'
?>