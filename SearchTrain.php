<?php

ob_start();
include("Header.php");

?>

<form action=SearchTrain.php method=post>
<br><br>Enter Source -<Select name=src ><option>select</option><option>NEW DELHI</option><option>AMBALA</option>
<option>PATHANKOT</option><option>JAMMU TABI</option><option>SONIPAT</option><option>PANIPAT</option><option>KURAKSHETRA</option>
<option>SABZI MANDI</option><option>KARNAL</option><option>CHANDIGARH</option><option>LUDHIYANA</option><option>KHANNA</option></select>

<br><br>Enter Destination  -<Select name=dest><option>select</option><option>NEW DELHI</option><option>AMBALA</option>
<option>PATHANKOT</option><option>JAMMU TABI</option><option>SONIPAT</option><option>PANIPAT</option><option>KURAKSHETRA</option>
<option>SABZI MANDI</option><option>KARNAL</option><option>CHANDIGARH</option><option>LUDHIYANA</option><option>KHANNA</option>
</select>
<br><input type=submit name=srch  value='Search' />
</form>

<?php
if(isset($_REQUEST["srch"]))
{

            $Source = $_REQUEST["src"];
			$Destination = $_REQUEST["dest"];

		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Select s1.TrainNumber,s1.Stop'Source',concat(s1.ArrivalTime,' - ',s1.DepartureTime)'Time1',
		    s2.Stop'Destination',concat(s2.ArrivalTime,' - ',s2.DepartureTime)'Time2' from stopage s1,stopage
		    s2 where s1.stop = '$Source' and s2.stop='$Destination' and   s1.TrainNumber = s2.TrainNumber;";


		    $result = $con->query($qry);

		 		if($result->num_rows>0)
		           {


		 		     echo("<table cellspacing=0px border=1 cellpadding=10px>");
		 		     echo("<tr align=center ><td>Train Number</td><td>Source</td><td>ArrivalTime</td><td>Destination</td><td>DepartureTime</td></tr>");
		 		     while($row = $result->fetch_object())
		 		             {

									$tn= $row->TrainNumber;
									$src = $row->Source;
                                	$des = $row->Destination;
									$t1 = $row->Time1;
									$t2 = $row->Time2;

								echo("<tr><td>$tn</td><td>$src</td><td>$t1</td><td>$des</td><td>$t2</td></tr>");

   		 	                   }
   		 	                  echo("</table>");

               		}
		               		else
		               		echo("<h1>No Train found....");



			}

			ob_end_flush();
include("Footer.php");
?>