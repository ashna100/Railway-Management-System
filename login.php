 <?php

ob_start();
include("Header.php");

?>

<form action="login.php" method="post">
<br>Enter Email ID : <input type=text name=unm >
<br>Enter Password : <input type=password name=pwd >
<br><input type=Submit name=Login value=Login > <a href="Registration.php">Add new user</a>
</form>

<?php

if (isset($_REQUEST["Login"]))
{

                                                   $unm = $_REQUEST["unm"];
			$pwd = $_REQUEST["pwd"];

		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Select * from registration where Username='$unm' and Password='$pwd'";


		    $result = $con->query($qry);

		 		if($result->num_rows>0)
		           {

		 		     while($row = $result->fetch_object())
		 		             {

									$role= $row->Role;

									$_SESSION["unm"] = $unm;
									$_SESSION["role"] = $role;


									header("Location:home.php");


								}
					}
					else
					echo("Invalid Username Password.");

}
ob_end_flush();
include("Footer.php");
?>
