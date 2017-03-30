<?php
	$purpose=$_POST['purpose'];
	if(strcmp($purpose,"admin")==0)
	{
		header('Location: admin.html');
	}
	else if(strcmp($purpose,"member")==0)
	{
		header('Location: member.html');
	}
	else if(strcmp($purpose,"chapter")==0)
	{
		header('Location: chapter.html');
	}
	else if(strcmp($purpose,"student")==0)
	{
		header('Location: student.html');
	}
?>