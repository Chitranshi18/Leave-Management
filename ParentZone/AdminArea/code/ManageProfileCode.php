<?php
session_start();

require("DBConnection.php");


date_default_timezone_set("Asia/Kolkata");
$time = date("h:i:sa");
$date = date("d-m-Y");

$action = mysqli_real_escape_string($conn, $_REQUEST['action']);

switch ($action)
{
	case "editprofile":

		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$id = $_SESSION["mobile"];

		$query = "update parentlogin set name='$name', mobile='$mobile' , password='$password' where mobile='$id' ";
		if (mysqli_query($conn, $query))
		{
			$_SESSION["mobile"] = $mobile;
			header("location:../Profile?msg=editsuccess");
		}
		else
		{
			header("location:../Profile?msg=editerror");
		}


		break;

	case "changepassword":

		$oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
		$newpass = mysqli_real_escape_string($conn, $_POST['newpass']);
		$cnfnewpass = mysqli_real_escape_string($conn, $_POST['cnfnewpass']);

		$email = $_SESSION["AdminEmail"];

		$query1 = "select * from adminlogin where AdminEmail='$email' ";
		$res1 = mysqli_query($conn, $query1);
		$row1 = mysqli_fetch_array($res1, MYSQLI_BOTH);

		$opass = $row1["AdminPassword"];

		if ($opass == $oldpass)
		{
			if ($newpass == $cnfnewpass)
			{
				$query = "update adminlogin set AdminPassword='$newpass' where AdminEmail='$email' ";
				if (mysqli_query($conn, $query))
				{
					$_SESSION["AdminEmail"] = $adminemail;
					header("location:../Profile?msg=changepasswordsuccess");
				}
				else
				{
					header("location:../Profile?msg=changepassworderror");
				}
			}
			else
			{
				header("location:../Profile?msg=newpasserror");
			}
		}
		else
		{
			header("location:../Profile?msg=oldpasserror");
		}


		break;
}
