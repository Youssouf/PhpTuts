<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Floating Point Numbers</title>
  </head>
  <bod>
      
       <?php $integer = 3;
           $myFloat = 3.55; 
          
    ?>
  

    <?php echo $float = 3.14; ?><br />
    <?php echo $float + 7; ?><br />
    <?php echo 4/3; ?><br />
    This is a floating point: <?php echo '5/4'; ?>
    This will give an error:  <?php echo 4/3.5; ?><br />
    <br />
    Round:     <?php echo round($float, 1);   ?><br />
    Ceiling:   <?php echo ceil($float);       ?><br />
    Floor:     <?php echo floor($float);     ?><br />
    No Round Here : <?php echo ceil($myFloat); ?> <br/>
    <br />
    
   
    
    <?php echo "Is {$integer} integer? " . is_int($integer); ?><br />
    <?php echo "Is {$float} integer? " . is_int($float); ?><br />
    <br />
    <?php echo "Is {$integer} float? " . is_float($integer); ?><br />
    <?php echo "Is {$float} float? " . is_float($float); ?><br />
    <br />
    <?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br />
    <?php echo "Is {$float} numeric? " . is_numeric($float); ?><br />
    <br />
    <?php echo "Is {$integer} integer " . is_int($integer) ;?> <br/>

    </bod>
  
</html>
