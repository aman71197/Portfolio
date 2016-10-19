<?php
// Check for empty fields


	return false;


if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

$today = date("F j, Y, g:i a");


   $filename = "/home/btech/cs1150210/public_html/contact_responses/responses.txt";
   $file = fopen( $filename, "a" );
   
   if( $file == false ) {
      echo ( "Error in opening new file" );
      return false;
   }
   fwrite( $file, "New Response $today     $name    $email   $message" );
   fclose( $file );
	echo '...'
	return false;


?>
