<?php

ob_start();
include("Header.php");
?>


<?php


		    $con = new mysqli("localhost","root","","railways");

		    $result = $con->query("Select * from traininfo");

		 		if($result->num_rows>0)
		           {

							echo("<h1 align=center>Trains Details</h1>");
							echo("<table width=70% border=1  align=center cellspacing=1>");
							echo("<tr align=center><td>TrainName</td><td>TrainNumber</td><td>Source</td><td>Destination</td><td>DepartureTime</td><td>ArrivalTime</td><td>Sun</td><td>Mon</td><td>Tues</td><td>Wed</td><td>Thus</td><td>Fri</td><td>Sat</td></tr>");
                           while($row = $result->fetch_object())
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


								echo("<tr><td>$name</td><td>$num</td><td>$sr</td><td>$dt</td><td>$dept</td><td>$at</td><td>$s</td><td>$m</td><td>$t</td><td>$w</td><td>$th</td><td>$f</td><td>$st</td><a href=UpdateTrain.php?TrainNumber=$num>Edit</a></td><td><a href=DeleteTrain.php?TrainNumber=$num>Delete</a></td></tr>");


		 	                   }
							echo("</table>");
        		}
        		else
        		echo("<h1>No Train found....");


ob_end_flush();
include("Footer.php");
?>