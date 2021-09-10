<?php
echo "Tabel Logika 1111 </br>";

$and00 = intval(false&&false);
$and01 = intval(false&&true);
$and10 = intval(true&&false);
$and11 = intval(true&&true);

$or00 = intval(false||false);
$or01 = intval(false||true);
$or10 = intval(true||false);
$or11 = intval(true||true);

echo "<table border=1>
  <tr>
    <td>Input True</td>
    <td>Input 2</td>
    <td>AND</td>
    <td>OR</td>
  </tr>
  <tr>
    <td>false</td>
    <td>false</td>
    <td>$and00</td>
    <td>$or00</td>
  </tr>
  <tr>
    <td>false</td>
    <td>true</td>
    <td>$and01</td>
    <td>$or01</td>
  </tr>
  <tr>
    <td>true</td>
    <td>false</td>
    <td>$and10</td>
    <td>$or10</td>
  </tr>
  <tr>
    <td>true</td>
    <td>true</td>
    <td>$and11</td>
    <td>$or11</td>
  </tr>
</table>";
 ?>
