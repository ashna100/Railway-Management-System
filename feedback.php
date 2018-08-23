     <?php
      ob_start();
      include("Header.php");

      ?>

      <h3 align=center>Feedback Form </h3>

      <form action=feedback.php method=POST>
      <br><br>Enter Name - <input type=text name= name />
      <br><br>Enter Email   - <input type=text name= email />
      <br><br>Enter Feedback - <input type=text name= feed />
<br><br><input type=submit value=submit   name=Submit   />      </form>

      <?php

	  if(isset($_REQUEST["Submit"]))
	  {


	  		$a = $_REQUEST["name"];
	  		$b = $_REQUEST["email"];
	  		$c = $_REQUEST["feed"];

	  		//                                            server     username  password   databasename

	  		$con = mysqli_connect("localhost","root","","railways");


	  		$str = "insert into feedback values('$a','$b','$c')";


	  		$rows = mysqli_query($con,$str);

	           if($rows>0)
	  			echo("<h1>Data inserted successfully...</h1>");
	           else
	              echo("<h1> NO Data inserted....</h1>");

	     }
	     ob_end_flush();
   ?>



