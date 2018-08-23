<?php

ob_start();
include("Header.php");
if(isset($_REQUEST["Update"]))
{


    								            $unm = $_SESSION["unm"];
									 			$pwd = $_REQUEST["pwd"];
									 			$fname = $_REQUEST["fnm"];
									 			$lname = $_REQUEST["lnm"];
									 			$Add = $_REQUEST["add"];
									 			$Eid = $_REQUEST["eid"];
									 			$num = $_REQUEST["num"];


		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Update registration set Password='$pwd', FirstName='$fname', LastName='$lname',
		    Address='$Add', EmailId='$Eid', Number='$num' where username='$unm' ";


		    $rows = $con->query($qry);

		if($rows>0)
			echo("<h1>Data Updated successfully.</h1>");
		else
			echo("<h1>No data updated successfully...</h1>");





}

//=======================================================================

//else if(isset($_REQUEST["id"]))
{



			$unm = $_SESSION["unm"];

		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Select * from Registration where Username='$unm' ";

		    $result = $con->query($qry);

		 		if($result->num_rows>0)
		           {

		 		            if($row = $result->fetch_object())
		 		             {

 			                 $pwd = $row->Password;
 			                 $fname = $row->FirstName;
							 $lname = $row->LastName;
							 $Add = $row->Address;
							 $Eid = $row->EmailId;
							 $num= $row->Number;


echo("

<form action=UpdateRegistration.php method=POST>


<br><br> Password :<input type=password name=pwd value=$pwd />
<br><br> First Name :<input type=text name=fnm value=$fname/>
<br><br> Last Name :<input type=text name=lnm value=$lname />
<br><br> Address :<input type=text name=add value=$Add />
<br><br> Email Id :<input type=text name=eid  value=$Eid />
<br><br> Number :<input type=text name=num  value=$num />

<br><input type=submit name=Update  value='Update' />

</form>

       ");


		 	                   }
        		}
        		else
        		echo("<h1>No user found....");

}



ob_end_flush();
include("Footer.php");
?>

