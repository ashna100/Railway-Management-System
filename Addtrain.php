<?php
ob_start();
include("Header.php");

?>

<h3 align=center> ADD TRAIN </h3>

<form action=Addtrain.php method=POST>
<br><br>Enter Train Name - <input type=text name= name />
<br><br>Enter  Train Number - <select name=number><option>select</option><option>1</option>
<option>2</option><option>3</option></select>
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
<input type=checkbox name=thur value='thursday'>thur
<input type=checkbox name=fri value='friday'>fri
<input type=checkbox name=sat value='saturday'>sat

<br><br><input type=submit name=submit  value='Submit' />

</form>

<?php

if(isset($_REQUEST["submit"]))
{

            $sun="no";
            $mon="no";
            $tue="no";
            $wed="no";
            $thurs="no";
            $fri="no";
            $sat="no";

		$a = $_REQUEST["name"];
		$b = $_REQUEST["number"];
		$c = $_REQUEST["src"];
		$d = $_REQUEST["dest"];
        $e = $_REQUEST["time"];
        $f = $_REQUEST["tme"];

        if(isset($_REQUEST["sun"]))
        $sun="yes";
        if(isset($_REQUEST["mon"]))
        $mon="yes";
        if(isset($_REQUEST["tue"]))
		        $tue="yes";
        if(isset($_REQUEST["wed"]))
           $wed="yes";
        if(isset($_REQUEST["thurs"]))
           $thur="yes";
       if(isset($_REQUEST["fri"]))
           $fri="yes";
       if(isset($_REQUEST["sat"]))
           $sat="yes";



		//                                            server     username  password   databasename

		$con = mysqli_connect("localhost","root","","railways");


		$str = "insert into traininfo values('$a','$b','$c','$d','$e','$f','$sun','$mon','$tue','$wed','$thur','$fri','$sat')";


		$rows = mysqli_query($con,$str);

         if($rows>0)
			echo("<h1>Data inserted successfully...</h1>");
         else
            echo("<h1> NO Data inserted....</h1>");

}
ob_end_flush();
?>