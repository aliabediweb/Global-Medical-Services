<!doctype html>
<html>
	
<head>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Global Medical Services</title>
	
</head>

<body>

  <?php

    if(isset($_POST["submit"])) {
        $recipient="aliabediweb@outlook.com";
        $subject="Global Medical Services - New Appointment Request";

        $new_returning=$_POST["new_returning"];
        $f_name=$_POST["f_name"];
        $l_name=$_POST["l_name"];
        $email=$_POST["email"];
        $number=$_POST["number"];
        $birthday=$_POST["birthday"];
        $reason=$_POST["reason"];

        $message=$_POST["message"];


        $mailBody="
          New or returning patient: $new_returning\n
          First name: $f_name\n
          Last name: $l_name\n
          Email: $email\n
          Phone number: $number\n
          Birthday: $birthday\n
          Reason for visit: $reason\n\n
          Message (optional): $message
        ";

        mail($recipient, $subject, $mailBody, "From: <$email>");
    }

  ?> 

  <div id="header">Global Medical Services</div>
  <div id="header_2">Medical Care Extraordinaire</div>

  <h3>Thank You</h3>
  <p>Your appointment request has been sent.</p>
  <p>We will contact you shortly.</p>
	
	<hr/>
	
	<p class="footer">Global Medical Services </br> 22819 Michigan Ave, Dearborn, MI 48124 </br> (313) 769-5820 </p>

</body>
	
</html> 



<!------------ Copyright © Ali Abedi [July 2020] ------------>