<?php
  session_start();
  if(isset($_SESSION["priusername"])){
    echo "Welcome, ".$_SESSION['priusername']."!";
  }
   else
	   header("location: index.php");
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
    <html lang="en">
    <head>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
	<center> <div>
	 
      <table  border="1" style="display: inline-block; border: 1px solid; float: left; ">
      <?php
      if(isset($_POST['submit']))
{ 
	  $branch = $_POST['Branch'];
$sslc= $_POST['sslc'];
$puaggregate = $_POST['puagg'];
$beaggregate= $_POST['beagg'];
$backlogs = $_POST['curback']; 
$hisofbk = $_POST['hob'];

mysql_connect('localhost','root','');
mysql_select_db('details');

$sql = "SELECT * FROM basicdetails WHERE Approve=1 and Branch='$branch' and SSLC='$sslc' and PU/Dip='$puaggregate' and BE='$beaggregate' and Backlogs='$backlogs' and HofBacklogs='$hisofbk'"; 




        
          while( $row = mysql_fetch_assoc($sql) )
{         
            echo
            "<tr>"."<td>".$row ['FirstName']."</td>". "</tr>";
              echo 
               "<tr>". "<td>".$row ['LastName']."</td>". "</tr>";
                echo
            
               "<tr>"."<td>".$row ['USN']."</td>". "</tr>";

               echo

               "<tr>"."<td>".$row ['Mobile']."</td>". "</tr>";
               echo
             
               "<tr>"."<td>".$row ['Email']."</td>". "</tr>";
               echo
              
               "<tr>"."<td>".$row ['DOB']."</td>". "</tr>";
              echo
               "<tr>"."<td>".$row ['Sem']."</td>". "</tr>";
               
               echo
               "<tr>"."<td>".$row ['Branch']."</td>". "</tr>";
             
             echo
               "<tr>"."<td>".$row ['SSLC']."</td>". "</tr>";
             echo
              "<tr>". "<td>".$row ['PU/Dip']."</td>". "</tr>";
              echo
               "<tr>"."<td>".$row ['BE']."</td>". "</tr>";
            echo  
               "<tr>"."<td>".$row ['Backlogs']."</td>". "</tr>";
              echo
              "<tr>". "<td>".$row ['HofBacklogs']."</td>". "</tr>";
            echo
               "<tr>"."<td>".$row ['DetainYears']."</td>". "</tr>\n";
          }
}
        ?>
		</div></center>        
    
     
    </table>
	</body>
    </html>