<?php
$var1 = 42;
$var2 = "42";
$var3 = 15.8;
$var4 = true;
$var5 = false;
$var6 = null;

?>

<pre>
<?php
$var1 = 42;
$var2 = "42";
$var3 = 15.8;
$var4 = true;
$var5 = false;
$var6 = null;
// before conv
var_dump($var1, $var2, $var3, $var4, $var5, $var6);
?>
</pre>

<pre>
<br><br>
<?php
$var1 = (string)42;
$var2 = (int)"42";
$var3 = (int)15.8;


// after conv
var_dump($var1, $var2, $var3);
?>
</pre>


<pre>
<br><br>
<?php
$var4 = true;
$var5 = false;

echo "var4 = $var4<br>";
echo "var5 = $var5<br>";
var_dump($var4, $var5);
?>
</pre>

<pre>
<?php
var_dump((bool)0);
var_dump((bool)"0");
var_dump((bool)"PHP");
var_dump((bool)[]);
?>


</pre>