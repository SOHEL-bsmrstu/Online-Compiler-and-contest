<?php
include 'time_controling.php';
	$languageID=$_POST["language"];
        error_reporting(0);


	if($_FILES["file"]["name"]!="")
	{
		include "oj/make_file.php";
	}
	else
	{
		switch($languageID)
			{
				case "c":
				{
					include("oj/c.php");
					break;
				}
				case "cpp":
				{
					include("oj/cpp.php");
					break;
				}

				case "cpp11":
				{
					include("oj/cpp11.php");
					break;
				}
				case "java":
				{	
					include("oj/java.php");
					break;
				}
				/*case "python2.7":
				{
					include("compilers/python27.php");
					break;
				}
				case "python3.2":
				{
					include("compilers/python32.php");
					break;
				}*/
			}
	}
?>


