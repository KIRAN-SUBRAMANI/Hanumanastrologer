<?php
error_reporting(E_ALL);

if($_POST)
{
	$recepient_email ="hanumanastrologercentre6@gmail.com"; //recepient
    $mail_from = "contact@hanumanastrologercentre6@gmail.com"; //from email using site domain.
    $subject = "Reg:Message from ".$_POST['first_name']; //email subject line
    
    $sender_name = $_POST["first_name"]; //capture sender name
    $sender_email = $_POST["email"]; //capture sender email
	
	$body = "*************************************\n";
	$body .= "Form details <br />";
	$body .="Name ".$sender_name."<br />";	
	$body .= "Contact ".$_POST["contact"]."<br />"; 
			$body .= "Time ".$_POST["time"]."<br />"; 
	$body .= "place ".$_POST["place"]."<br />"; 
    $body .="Email ".$sender_email."<br />";
    $body .= "Enquiry ".$_POST["comments"]; //capture message
    
	//header
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "From:".$mail_from."\r\n"; 
	$headers .= "Reply-To: ".$sender_email."" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
    $headers .= "Bcc: cb@carvinfo.com" . "\r\n";  
    $sentMail = mail($recepient_email, $subject, $body, $headers);
	if($sentMail) //output success or failure messages
	{   unset($_POST);		
				echo "<br>";	
				echo "<br>";
				echo "<br>";
				echo "<br>";
				
				
				echo '<div class="alert alert-success alert-dismissible">';
				echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				echo '<strong class="animated flash infinite">Thankyou!</strong> <br>Your message Has Been submitted Successfully.';
				echo '</div>';
				echo header( "refresh:2;url=index.php" );
	}
	else{
            
				echo '<div class="alert alert-danger alert-dismissible">';
				echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
				echo '<strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.';
				echo '</div>';
	}
}
?>
<?php
include('index.php');
?>