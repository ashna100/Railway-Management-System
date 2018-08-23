
<?php

session_start();

echo("<li><a href=index.php >home</a></li> ");

if(isset($_SESSION["unm"]))
{
echo("<li><a href=SearchTrain.php >Search Train</a></li> ");
echo("<li><a href=SearchTrainnumber.php >Search Train Number</a></li> ");

					if($_SESSION["role"]=="Admin")
					{
						echo("<li><a href=Addtrain.php >Add Train</a></li> ");
						echo("<li><a href=Addstopage.php >Add Stopage</a></li> ");
						echo("<li><a href=UpdateAddtrain.php >Update Addtrain</a></li> ");
						echo("<li><a href=DeleteTrain.php >Delete Train</a></li> ");
						echo("<li><a href=displayallTrain.php >display All Train</a></li> ");
						echo("<li><a href=Displayalluser.php >Display All User</a></li> ");

					}

		echo("<li><a href=UpdateRegistration.php >Update Profile</a></li> ");
		echo("<li><a href=feedback.php >feedbacks</a></li> ");
		echo("<li><a href=logout.php >Logout</a></li> ");

}
else

echo("<li><a href=Login.php >Login</a></li> ");


?>