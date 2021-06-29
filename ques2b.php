<?php
if($_POST)
{
    $name=$_POST['name'];
    $seat=$_POST['seat'];
    $meal=$_POST['meal'];
}
?>
<div id="main">
<form method="post" action="ques2c.php">
<table>
<tr>
<td colspan="2">Set your flight preference</td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="name" value=<?php echo $name ?>></td>
</tr>
<tr>
<td>Seat selection</td>
<td><input type="radio" name="seat" value="first"  <?php if($seat=="first"){ echo "checked";}?>>First
<input type="radio" name="seat" value="middle" <?php if($seat=="middle"){ echo "checked";}?>>Middle
<input type="radio" name="seat" value="window" <?php if($seat=="window"){ echo "checked";}?>>Window</td>
</tr>
<tr>
<td>Meal selection</td>
<td><input type="radio" name="meal" value="veg"  <?php if($meal=="veg"){ echo "checked";}?>>Veg
<input type="radio" name="meal" value="nonveg"  <?php if($meal=="nonveg"){ echo "checked";}?>>Nonveg
<input type="radio" name="meal" value="diabetic"  <?php if($meal=="diabetic"){ echo "checked";}?>>Diabetic
<input type="radio" name="meal" value="child"  <?php if($meal=="child"){ echo "checked";}?>>Child</td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="submit" disabled=""></td>
</tr>
</table>
<?php
date_default_timezone_set('Asia/Calcutta');
$intwomonths=60*60*24*60+time();
setcookie('lastVisit',date("G:i - m/d/y"),$intwomonths);
if(isset($_COOKIE['lastvisit']))
{
    $visit=$_COOKIE['lastvisit'];
    echo "Your last visit was $visit";
    setcookie('name',$name,$intwomonths);
    setcookie('seat',$seat,$intwomonths);
    setcookie('food',$meal,$intwomonths);
}
else
{
    echo "Cookie has been set";
    setcookie('name',$name,$intwomonths);
    setcookie('seat',$seat,$intwomonths);
    setcookie('food',$meal,$intwomonths);
}
?>
<p>Press<input type="submit" name="submit" value="Go">to view the contents</p>
</form>
</div>