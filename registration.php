

<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<?php

ob_start();
include("Header.php");

?>
<form action=registration.php method=post >
<br><br> Username :<input type=text name=Unm />
<br><br> Password :<input type=password name=pwd  />
<br><br> First Name :<input type=text name=fnm />
<br><br> Last Name :<input type=text name=lnm  />
<br><br> Address :<input type=text name=add  />
<br><br> Email Id :<input type=text name=Eid  />
<br><br> Number :<input type=text name=num  />

<br><br><input type=submit value=Register name=register />

</form>

<?php

if(isset($_REQUEST["register"]))
{

		if(empty($_REQUEST["Unm"]))
			echo("<h2>Must input Username.");

			else if (!preg_match("/^[A-Za-z\s]*$/", $_REQUEST["Unm"]) )
			echo("<h2>Incorrect format in name, only alphabets allowed.");

		if(empty($_REQUEST["pwd"]))
		echo("<h2>Must input password.");

		else if (!preg_match("/^[A-Za-z0-9]{5,20}$/",$_REQUEST["pwd"]) )
		echo("<h2>Incorrect format in password, only alphabets and numbers allowed with  5 to 20 letters.");

	if(empty($_REQUEST["fnm"]))
		echo("<h2>Must input firstname.");

		else if (!preg_match("/^[A-Za-z\s]*$/", $_REQUEST["fnm"]) )
		echo("<h2>Incorrect format in name, only alphabets allowed.");


		if(empty($_REQUEST["lnm"]))
		echo("<h2>Must input lastname.");

		else if (!preg_match("/^[A-Za-z\s]*$/", $_REQUEST["lnm"]) )
		echo("<h2>Incorrect format in name, only alphabets allowed.");

		if(empty($_REQUEST["add"]))
		echo("<h2>Must input address.");


		else if (!preg_match("/^[A-Za-z0-9]{5,50}$/",$_REQUEST["add"]) )
		echo("<h2>Incorrect format in address, only alphabets and numbers allowed with  5 to 50 letters.");


		if(empty($_REQUEST["Eid"]))
		echo("<h2>Must input Email Id.");

        else if (!filter_var($_REQUEST["Eid"],FILTER_VALIDATE_EMAIL) )
		echo("<h2>  only alphabets and numbers allowed in email id ");

		if(empty($_REQUEST["num"]))
			echo("<h2>Must input your contact number.");

		else if (!preg_match("/^[0-9]*$/", $_REQUEST["num"]) )
	    	echo("<h2>Incorrect format, only numbers allowed.");




		else
		{
             $user = $_REQUEST["Unm"];
			$pwd = $_REQUEST["pwd"];
			$fname = $_REQUEST["fnm"];
			$lname = $_REQUEST["lnm"];
			$Add = $_REQUEST["add"];
			$Eid = $_REQUEST["Eid"];
			$no = $_REQUEST["num"];



			$con = mysqli_connect("localhost","root","","railways");


			$str = "insert into Registration values('$user','$pwd','$fname','$lname','$Add','$Eid','$no','User')";


			$rows = mysqli_query($con,$str);

	                          if($rows>0)
				echo("<h1>Data inserted successfully...</h1>");
	                      else
	                              echo("<h1> NO Data inserted....</h1>");


	}


}

ob_end_flush();
include("Footer.php");
?>
</body>
</html>