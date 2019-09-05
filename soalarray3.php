<?php 
$transport = array('Alip', '11', 'Kopo Elok');
$nama = array('Mamat', '11', 'Kopo Sayati');
$name = array('Ujang Gerebek', '12', 'Kopo Sayati');
 echo "<pre>";
  print_r ($transport);
  print_r ($nama);
  print_r ($name);
   echo "</pre>"; 
 
$mode = current($transport);
echo $mode."<br>"; 
$mode = next($transport);
echo $mode."<br>"; 
$mode = current($transport);
echo $mode."<br>"; 
$mode = prev($transport);
echo $mode."<br>"; 
$mode = end($transport);
echo $mode."<br>"; 
$mode = current($transport);
echo $mode."<br>";
echo"<br>";

$mode = current($nama);
echo $mode."<br>"; 
$mode = next($nama);
echo $mode."<br>"; 
$mode = current($nama);
echo $mode."<br>"; 
$mode = prev($nama);
echo $mode."<br>"; 
$mode = end($nama);
echo $mode."<br>"; 
$mode = current($nama);
echo $mode."<br>";
echo "<br>";

$mode = current($name);
echo $mode."<br>"; 
$mode = next($name);
echo $mode."<br>"; 
$mode = current($name);
echo $mode."<br>"; 
$mode = prev($name);
echo $mode."<br>"; 
$mode = end($name);
echo $mode."<br>"; 
$mode = current($name);
echo $mode."<br>";
?> 