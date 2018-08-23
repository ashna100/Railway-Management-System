<?php
ob_start();
include("Header.php");
?>

<form action=SearchTrainnumber.php method=post>
<br>Enter TrainNumber = <input type=text name=number />
<br><input type=submit name=srch  value='Search' />
</form>

<?php

if(isset($_REQUEST["srch"]))
{


			$num = $_REQUEST["number"];

		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Select * from traininfo where TrainNumber=$num";

		    $result = $con->query($qry);

		 		if($result->num_rows>0)
		           {
                            echo("<h1 align=center>TRAIN Details</h1>");
		 		            if($row = $result->fetch_object())
		 		             {
		 			                   $name= $row->TrainName;
		 			                   $num = $row->TrainNumber;
		 			                   $sr = $row->Source;
		 			                   $dt = $row->Destination;
		 			                   $dept = $row->DepartureTime;
		 			                   $at = $row->ArrivalTime;
		 			                   $s= $row->Sun;
		 			                   $m = $row->mon;
		 			                   $t = $row->tue;
		 			                   $w = $row->wed;
		 			                   $th = $row->thurs;
		 			                   $f = $row->fri;
		 			                   $st = $row->sat;


									   echo("<h2>TrainNumber : $num</h2>");
		 			                   echo("<h2>Source : $sr</h2>");
		 			                   echo("<h2>Destination : $dt</h2>");
		 			                   echo("<h2>DepartureTime : $dept</h2>");
		 			                   echo("<h2>ArrivalTime : $at</h2>");
		 			                   echo("<h2>Days Sun : $s</h2>");
		 			                   echo("<h2>mon : $m</h2>");
		 			                   echo("<h2>tue : $t</h2>");
		 			                   echo("<h2>wed : $w</h2>");
		 			                   echo("<h2>thu : $th</h2>");
		 			                   echo("<h2>fri : $f</h2>");
		 			                   echo("<h2>sat : $st</h2>");

		 	                   }
        		}
        		else
        		echo("<h1>No Train found....");


/*================================================================*/
			$num = $_REQUEST["number"];

		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Select * from stopage where TrainNumber=$num";

		    $result = $con->query($qry);

		 		if($result->num_rows>0)
		           {


							echo("<table width=70% border=1  align=center cellspacing=1>");

							echo("<tr align=center><td>TrainNo</td><td>STOP</td><td>ARRIVAL TIME</td><td>DEPARTURE TIME</td></tr>");

		 		            while($row = $result->fetch_object())
		 		             {
		 			                       $h = $row->TrainNumber;
									 		$i = $row->Stop;
									 		$j = $row->ArrivalTime;
											$k =$row->DepartureTime;

									echo("<tr><td>$h</td>");
		 			                   echo("<td>$i</td>");
		 			                   echo("<td>$j</td>");
		 			                   echo("<td>$k</td></tr>");

		 	                   }

		 	                   echo("</table>");
        		}
        		else
        		echo("<h1>No Train found....");


}

ob_end_flush();
include("Footer.php");
?>