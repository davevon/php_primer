<?php 
$title = 'index';
include 'includes/header.php'?>
    <!--BASIC HTML-->
    <h1>Hello Word wah gwane</h1>
    <break></break>

    <?php 
    //printing to the html
    echo "Hello PHP";
    // you can echo html tags
    echo "<br/>";
    echo 'second Line';
    echo "<br/>";
 


// variables needs a '$'. they are not strongly typed
$name = 'Davevon';
$age = '21';
//echo variable
echo "<br/>";
echo $name;
echo '<h1>My Name is: '.$name.' </h1>';
echo '<h1>My age is: '.$age.' </h1>';
//echo usinng double quote and interpolation
echo "<h1> my name is : $name</h1>";
?>
<button type="button" class="btn btn-dark" >click me</button>  
<button type="button" class="btn btn-success" >click me</button>  
<button type="button" class="btn btn-primary" >click me</button>  

<?php require 'includes/footer.php'
?>