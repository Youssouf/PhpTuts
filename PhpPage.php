<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
} 

myTest();  // run function
echo $y . "+" . $x ."=". $y;  // output the new value for variable $y
?>
<br/>

<?php
echo  str_word_count("Hello world!"); // outputs 2


?>

</body>
</html>
