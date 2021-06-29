<?php
if($_POST)
{
    $name=$_POST['name'];
    $seat=$_POST['seat'];
    $meal=$_POST['meal'];
}
?>
<div id="second">
<h1>--------------SSS Flights-------------</h1>
The cookie values are:<br>
<?php
echo "Name: ".$_COOKIE["name"];
echo "<br>Seat: ".$_COOKIE["seat"];
echo "<br>Food: ".$_COOKIE["food"];
?>
</div>