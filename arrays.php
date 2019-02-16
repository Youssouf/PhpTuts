<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
    <?php
    
    //  in php an array can mixe numerics and strings or character
      $numbers = array(4,8,15,16,23,42);
      //$numbers_2 = array(4,5,6,7);
      echo $numbers[0];
    ?>
    <br />    
   
    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $mixed[2]; ?><br />
    <?php //echo $mixed[3]; ?><br />
    <?php //echo $mixed ?><br />
    
    <?php echo $mixed[3][1]; ?><br />
    
    <?php $mixed[2] = "cat"; ?>
    <?php $mixed[4] = "mouse"; ?>
    <?php $mixed[] = "horse"; ?>
    
    <pre>
    <?php echo print_r($mixed); ?>
    </pre>
    
    <?php 
      //PHP 5.4 added the short array syntax.
      $array = [1,2,3];
      $shortArray = [2, 3, 5, 6, 6] // this is from php 5.4 
    ?>
    
  </body>
</html>
