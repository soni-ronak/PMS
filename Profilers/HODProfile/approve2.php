<?php
  session_start();
 if (isset($_SESSION['husername']) ){
  }
   else {
	   header("location: index.php");
   }
?>
<!--
    Developed by ByteRoots
    Contact: https://www.instagram.com/ByteRoots
    Starting Date :: Monday, 1 January, 2024
    Ending Date :: 
    All over :: 4 months and 18 days.
    Source copyright (c) 2024 Byteroots.in
-->
<!DOCTYPE html>
<html>

<form action="approve.php" method="post" style="
    height: 200px;
    width: 400px;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -200px;">
Enter the USN:<input type="text" name="id"><br><br>
Enter the Date: <input type="date" name="DOB" class="form-control" id="DOB" placeholder="DD/MM/YYYY"><br><br>
<input type="submit" value="approve">

</form>
</html>