<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Kelly Copas | Digital Designer & Developer">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<!-- Styles -->  
	<link rel="stylesheet" href="style.css">
	  
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
	  
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.typekit.net/hwi4lmb.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<title>Kelly Copas</title>
  </head>  
			
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
 <body>
 <!-- Header and Navigation -->
	<div class="container background-image top topnav" id="#top">
				<ul class="nav">
					<img src="images/logo.png" alt="Logo" />
						  <li class="nav-item">
							<a class="nav-link scroll" href="#about">About</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link scroll" href="#skills">Skills</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link scroll" href="#work">Work</a>
						  </li>
						  <li class="nav-item">
							<a class="nav-link scroll" href="#contact">Get in touch</a>
						  </li>
				</ul>
	</div>
	

<!--form_mail.php
		The program is in two parts:
		the first part receives the values form your Form and assigns them to variables.
		An email is then sent to the specified address.
		The second part creates a simple html response page.

		Note that a PHP script is essentially just an ordinary HTML script
		with some PHP statements embedded within the code using <php  and  ?>
		as the start and end PHP tags.

		This program as it is expects that
		1.  you have written an HTML Form with
				'action=form_mail.php method=post'
			 OR 'action=form_mail.php method=get'
		2.  your HTML Form contains 3 fields 'name', 'email', and 'message'
			(You can, if you are careful, amend this program to deal with more fields)
		3.  your HTML Form contains a hidden field named 'subject' which contains the phrase
		you wish to appear in the 'Subject' line of the email that is sent to you

		 To use this program as it is you *must* change the next line after these comments
			"you@uwe.ac.uk" must be replaced with your email address
		*/-->


		<?php

		$YourEmail = "kelly.copas@sky.com";

	

		$name=$_POST[name];
		$email=$_POST[email];
		$subject=$_POST[subject];
		$message=$_POST[message];

		
		$sendto="$YourEmail";
		$headers.= "MIME-Version: 1.0\r\n";
		$headers.= "Content-type: text/html; ";
		$headers.= "charset=iso-8859-1\r\n";
		$headers.= "From: $email";
		$subject=$_POST[subject];
		// Build the email body text
		  $emailcontent = "

		Name: $name
		Email: $email
		Subject: $subject
		Message: $message
		";
		
		?>

		<!--  HTML PAGE
		Except for the inclusion of PHP variables and the 'mail' statement
		the following is straightforward HTML code. You can add more HTML
		code but it should be outside the <php .. ?> tags.
		-->
		<html>
		<head>
		<title>Form Mail Response</title>
		</head>
		<body>
		<h2>Thank you for your message.</h2>
		<?php
		// The following line attempts to send the email that has been constructed in the code
		// above.
		// If the email is sent successfully the HTML below is used otherwise the HTML below
		// the "} else {" statement is used to output an error message to the user
		if (mail($sendto, $subject, $emailcontent, $headers)) {
		?>
		  	<p>&nbsp;</p>
			<p><b>Thank You <?php echo $name; ?></b> your message has been sent.</p>
		  	<p>You sent the following:</p>
			<table border="0" align="center" cellpadding="6">
				<tr> <!-- row 1 -->
					<td>Name: </td> <!-- column 1 -->
					<td><b><?php echo $name; ?> </b> </td> <!-- column 2 -->
				</tr>
				<tr> <!-- row 2 -->
					<td>Email: </td> <!-- column 1 -->
					<td><b><?php echo $email; ?> </b> </td> <!-- column 2 -->
				</tr>
				<tr> <!-- row 3 -->
					<td>Subject: </td> <!-- column 1 -->
					<td> <b><?php echo $subject; ?> </b></td> <!-- column 2 -->
				</tr>
				<tr> <!-- row 4 -->
					<td>Message: </td> <!-- column 1 -->
					<td><b><?php echo $message; ?> </b> </td> <!-- column 2 -->
				</tr>
			</table>
		<?php
		} else { // The HTML below this line is used IF the email fails to send
		?>
		  	<p>&nbsp;</p>
			<p><b>Sorry <?php echo $name; ?></b></p>
			<p>For some reason the message has failed to send.</p>
		 	<p>You tried to send the following:</p>
			<table border="0" align="center" cellpadding="6">
				<tr> <!-- row 1 -->
					<td>Name: </td> <!-- column 1 -->
					<td><b><?php echo $name; ?> </b> </td> <!-- column 2 -->
				</tr>
				<tr> <!-- row 2 -->
					<td>Email: </td> <!-- column 1 -->
					<td><b><?php echo $email; ?> </b> </td> <!-- column 2 -->
				</tr>
				<tr> <!-- row 3 -->
					<td>Subject: </td> <!-- column 1 -->
					<td> <b><?php echo $subject; ?> </b></td> <!-- column 2 -->
				</tr>
				<tr> <!-- row 4 -->
					<td>Message: </td> <!-- column 1 -->
					<td><b><?php echo $message; ?> </b> </td> <!-- column 2 -->
				</tr>
			</table>
			<p> Please try again.</p>
			<p><a href="comments.html">Back to contact form</a></p>
		<?php
		}
		?>

<!-- Footer -->
		<div class="row" style="background-color: #f9dbd0;">
				<div class="col-12">
					<footer>
						<p>&copy; Kelly Copas 2020.</p>
					</footer>
				</div>
		</div> 	
	
	</body>
</html>
