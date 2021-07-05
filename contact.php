<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$massage = $_REQUEST['massage'];

if (empty($name) || empty($email) || empty($massage))
{
 	echo "please fill the fields";
 
}
else
{
    mail("tarambandema@gmail.com" ," sanjit massage " , $massage ,"From: $name <
    		$email>");
    	
    	echo"<sript type='text/javadcript'>alert('Your massage sent successfully')
    	
    			window.history.log(-1);
    	</sript>";
    		
{
?>