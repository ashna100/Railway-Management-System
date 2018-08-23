
<?php
ob_start();
include("Header.php");
?>

<?php


		    $con = new mysqli("localhost","root","","railways");

		    $result = $con->query("Select * from registration");

		 		if($result->num_rows>0)
		           {

							echo("<h1 align=center>User Details</h1>");
							echo("<table width=70% border=1  align=center cellspacing=1>");
							echo("<tr align=center><td>FirstName</td><td>LastName</td><td>Address</td><td>Email_id</td><td>Password</td><td>Number</td></tr>");
                           while($row = $result->fetch_object())
		 		                 {


								$fname = $row->FirstName;
								$lname = $row->LastName;
								$Add = $row->Address;
								$Eid = $row->EmailId;
								$pwd = $row->Password;
								$num = $row->Number;


								echo("<tr><td>$fname</td><td>$lname</td><td>$Add</td><td>$Eid</td><td>$pwd</td><td>$num</td></tr>");


		 	                   }
							echo("</table>");
        		}
        		else
        		echo("<h1>No User found....");

ob_end_flush();
include("Footer.php");
?>
