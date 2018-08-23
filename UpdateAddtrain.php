


<?php
ob_start();
include("Header.php");
?>

<h3 align=center>UPDATE ADD TRAIN </h3>


<form action=UpdateAddtrain.php method=POST>
<br><br>Enter TrainNumber -  <input type=text name= number />
<br><br><input type=submit value=enter name=enter />
</form>



<?php

if(isset($_REQUEST["submit"]))
{



        $a = $_REQUEST["name"];
		$b = $_REQUEST["number"];
		$c = $_REQUEST["src"];
		$d = $_REQUEST["dest"];
        $e = $_REQUEST["time"];
        $f = $_REQUEST["tme"];

				if(isset($_REQUEST["sun"]))
				$sun = $_REQUEST["sun"];

				if(isset($_REQUEST["mon"]))
				$mon = $_REQUEST["mon"];

				if(isset($_REQUEST["tue"]))
				$tue = $_REQUEST["tue"];

				if(isset($_REQUEST["wed"]))
				$wed = $_REQUEST["wed"];

				if(isset($_REQUEST["thur"]))
				$thur = $_REQUEST["thur"];

				if(isset($_REQUEST["fri"]))
				$fri = $_REQUEST["fri"];

				if(isset($_REQUEST["sat"]))
				$sat = $_REQUEST["sat"];


		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Update Addtrain set TrainName='$name',TrainNumber='$number',Source='$src',
		    Destination='$dest',DepartureTime='$time',ArrivalTime='$tme',mon='$mon',Tue='$tue',
		    Wed='$wed',Thur='$thur',Fri='$fri',Sat='$sat', where TrainNumber='$number' ";


		    $rows = $con->query($qry);

		if($rows>0)
			echo("<h1>Data Updated successfully...</h1>");
		else
			echo("<h1>No data updated..</h1>");


}

//=======================================================================

else if(isset($_REQUEST["number"]))
{



			$number = $_REQUEST["number"];

		    $con = new mysqli("localhost","root","","railways");

		    $qry = "Select * from traininfo where TrainNumber='$number' ";

		    $result = $con->query($qry);

		 		if($result->num_rows>0)
		           {

		 		            if($row = $result->fetch_object())
		 		             {
		 		                                    $name= $row->TrainName;
									                $number = $row->TrainNumber;
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

echo("
<form action=UpdateAddtrain.php method=post>
<br><br>Enter Train Name - <input type=text name= name />
<br><br>Enter  Train Number - <select name=number><option>select</option><option>1</option><option>2</option><option>3</option></select>
<br><br>Enter Source -<Select name=src ><option>select</option><option>NEW DELHI</option>
<option>AMBALA</option><option>PATHANKOT</option><option>JAMMU TABI</option>
<option>SONIPAT</option><option>PANIPAT</option><option>KURAKSHETRA</option>
<option>SABZI MANDI</option><option>Yadgir</option><option>Perambur</option>
<option>Koduru</option><option>Lonavla</option><option>KARNAL</option><option>Kalyan Jn</option>
<option>Pune Jn</option><option>chennai egmore</option><option>Dadar</option>
<option>CHANDIGARH</option><option>LUDHIYANA</option><option>KHANNA</option></select>

<br><br>Enter Destination  -<Select name=dest><option>select</option><option>NEW DELHI</option>
<option>AMBALA</option><option>PATHANKOT</option><option>JAMMU TABI</option>
<option>SONIPAT</option><option>PANIPAT</option><option>KURAKSHETRA</option>
<option>SABZI MANDI</option><option>Yadgir</option><option>Perambur</option>
<option>Koduru</option><option>Lonavla</option><option>KARNAL</option>
<option>Kalyan Jn</option><option>Pune Jn</option><option>chennai egmore</option>
<option>Dadar</option><option>CHANDIGARH</option><option>LUDHIYANA</option>
<option>KHANNA</option><select>
<br><br>Enter Arrival Time - <input type=time name=tme />

<br><br>Enter Departure time - <input type=time name=time />

<br><br>Enter Days -

<input type=checkbox name=sun value='sunday'>Sun
<input type=checkbox name=mon value='monday'>mon
<input type=checkbox name=tue value='tuesday'>tue
<input type=checkbox name=wed value='wednesday'>wed
<input type=checkbox name=thur value='thursday'>thurs
<input type=checkbox name=fri value='friday'>fri
<input type=checkbox name=sat value='saturday'>sat

<br><input type=submit name=Update  value='Update' />

</form>

     ");


	       }
        	   }

        		else
        		echo("<h1>No Train found....");

}



ob_end_flush();
include("Footer.php");
?>

