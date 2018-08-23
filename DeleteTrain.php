

<?php

ob_start();

include("Header.php");



if(isset($_REQUEST["TrainNumber"]))
{



			$roll = $_REQUEST["TrainNumber"];

		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Delete from traininfo where TrainNumber=$roll";

		    $rows = $con->query($qry);

		 		if($rows>0)
					echo("<h1>Train deleted..........");
        		else
	        		echo("<h1>No Train found....");

}


echo("<br><a href=displayallTrain.php>Display All</a>");

ob_end_flush();
include("Footer.php");
?>

