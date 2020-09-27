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

	<div class="topnav" id="myTopnav">
		<a href="index.html">Home</a>
		<a href="contact.html" class="active">Contact</a>
		<a href="services.html">Services</a>
		<a href="about.html">About</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
	</div>
	
	<h3>Appointment Request</h3>
	
	<div class="container">
  		<form method="post" action="contact.php">	
			
			<div class="form_row">
				<div class="col_100">
        			<label class="first_label">Are you a new or returning patient?</label>
      			</div>
				<div class="col_35">
						<input type="radio" id="new" name="new_returning" value="New">
  						<label for="new">New</label><br>
				</div>
				<div class="col_35">
						<input type="radio" id="returning" name="new_returning" value="Returning">
  						<label for="returning">Returning</label><br>
				</div>
			</div>
			
    		<div class="form_row">
      			<div class="col_25">
        			<label for="form_f_name">First Name:</label>
      			</div>
      			<div class="col_75">
        			<input type="text" id="form_f_name" name="f_name" placeholder="Your first name..">
      			</div>
    		</div>
			
			<div class="form_row">
      			<div class="col_25">
        			<label for="form_l_name">Last Name:</label>
      			</div>
      			<div class="col_75">
        			<input type="text" id="form_l_name" name="l_name" placeholder="Your last name..">
      			</div>
			</div>
			
			<div class="form_row">
      			<div class="col_25">
        			<label for="form_email">Email:</label>
      			</div>
      			<div class="col_75">
        			<input type="text" id="form_email" name="email" placeholder="email@domain.com">
      			</div>
			</div>
			
			<div class="form_row">
      			<div class="col_25">
        			<label for="form_number">Phone Number:</label>
      			</div>
      			<div class="col_75">
        			<input type="number" id="form_number" name="number" placeholder="(888) 888-8888">
      			</div>
			</div>
			
			<div class="form_row">
      			<div class="col_25">
        			<label for="form_dob">Date of Birth</label>
      			</div>
      			<div class="col_75">
        			<input type="date" id="form_dob" name="birthday" placeholder="MM/DD/YYYY">
      			</div>
    		</div>
    		
			<div class="form_row">
      			<div class="col_25">
        			<label for="form_reason">Reason for visit:</label>
      			</div>
      			<div class="col_75">
        			<select id="form_reason" name="reason">
						<option value="" disabled selected>Select your reason</option>
						<option value="Perscription">Perscription</option>
          				<option value="Pain">Pain</option>
						<option value="Check-up">Check-up</option>
						<option value="Other">Other</option>
        			</select>
      			</div>
    		</div>	
			
    		<div class="form_row">
      			<div class="col_25">
        			<label for="form_message">Message (optional):</label>
      			</div>
      			<div class="col_75">
        			<textarea id="form_message" name="message" placeholder="Write something.." style="height:100px"></textarea>
      			</div>
    		</div>	
			
    		<div class="form_row">
      			<input id="submit_btn" name="submit" type="submit" value="submit">
    		</div>
			
		</form>
	</div>
	
	<hr/>
	
	<p class="footer">Global Medical Services </br> 22819 Michigan Ave, Dearborn, MI 48124 </br> (313) 769-5820 </p>


	<script>

		function myFunction() {
  			var x = document.getElementById("myTopnav");
  			if (x.className === "topnav") {
    			x.className += " responsive";
  			} else {
    			x.className = "topnav";
  			}
		}

	</script>

</body>
	
</html> 



<!------------ Copyright © Ali Abedi [July 2020] ------------>