<?php
ob_start();
include("Header.php");

?>
<h3 align=center>TRAIN STOPAGE </h3>

<form action=Addstopage.php method=POST>
<br><br>Enter TrainNumber - <select name=no><option>select</option><option>1</option><option>2</option><option>3</option></select>
<br><br>Enter Stop- <input type=text name=st />
<br><br>Enter Arrival Time - <input type=time name= at />
<br><br>Enter  Departure Time - <input type=time name=dt />
<br><br><input type=submit name=submit value='ADD' />
</form>

<?php

if(isset($_REQUEST["submit"]))
{


		$h = $_REQUEST["no"];
		$i = $_REQUEST["st"];
		$j = $_REQUEST["at"];
		$k = $_REQUEST["dt"];

	//                                                         server       username  password   databasename
				$con = mysqli_connect("localhost"     ,"root",             ""            ,"railways");


				$str = "insert into Stopage values($h,'$i','$j','$k')";


				$rows = mysqli_query($con,$str);

		         if($rows>0)
					echo("<h1>Data inserted successfully...</h1>");
		         else
		            echo("<h1> NO Data inserted....</h1>");


}

ob_end_flush();
include("Footer.php");
?>
