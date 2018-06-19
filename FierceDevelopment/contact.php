<?php

$error = "";
$successMessage = "";

if($_POST) {


    if (!$_POST['email']) {

        $error .= "The email field is required.<br>";

    }

    if (!$_POST['content']) {

        $error .= "The content field is required.<br>";

    }

    if ($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {

        $error .= "The email field is invalid.<br>";

    }

    if ($error != "") {

        $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form: </strong></p>' . $error . '</div>';

    }else {
        $name = $_POST['name'];
        $content = $_POST['content'];
        $emailTo = "contact@fiercedevelopment.com";
        $subject = "Someone has reached out using the contact form";
        $content = "Name: $name \n Message: $content";
        $headers = "From: ".$_POST['email'];

        if  (mail($emailTo, $subject, $content, $headers)){

            $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';

        }else {

            $error = '<div class="alert alert-danger" role="alert">Your message count\'t be sent - please try again later.</div>';

        }


    }

}

?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Fierce Development</title>
		<link rel="SHORTCUT ICON" href="images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Custom Stylesheet -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- ion icon css -->
		<link rel="stylesheet" href="includes/css/ionicons.min.css">

		<!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>

	</head>
	<body>

		<nav class="navbar navbar-inverse bg-color navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="contact.php">Contact</a>
					</ul>
					
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="container bgcolor">

			<div class="whitespace"></div>
			<div class="whitespace"></div>

			<div class="error"><?php echo $error.$successMessage ?></div>
			
			<div class="row">
				
					<div class="col-sm-6 vcenter pull-left">

			            <p>Thank you for your interest in our services. Please fill out the contact form to the right in detail for you would like for us to do.</p><br>
			            <p><i class="ion-ios-telephone-outline"></i> <strong>(618) 416-2131</strong></p><br>
			            <p><i class="ion-ios-email-outline"></i> <strong>contact@fiercedevelopment.com</strong></p><br>
			            <p><i class="ion-ios-world-outline"></i> <strong>www.FierceDevelopment.com</strong></p><br>

			        </div>

			        <div class="col-sm-6 pull-right">

			            <form method="post">

			                <h2>Enlist our services!</h2>

			                <div class="form-group">

			                    <label for="name"><i class="ion-person"> Name</i></label>
			                    <input class="form-control" id="name" type="text" name="name" placeholder="John Doe" required>

			                </div><!-- end name -->

			                <div class="form-group">

			                    <label for="email"><i class="ion-email"> Email address</i></label>
			                    <input class="form-control" id="email" type="email" name="email" placeholder="example@domain.com" required>
			                    

			                </div><!-- end email -->

			                <div class="form-group">

			                    <label for="content"><i class="ion-edit"> What can we do for you?</i></label>
			                    <textarea class="form-control" id="content" name="content" rows="10" cols="50" placeholder="Please enter a detailed message of what you would like to see" required></textarea>

			                </div><!-- end textarea -->

			                <div>

			                    <input class="btn btn-primary btnEdit" name="submit" type="submit" id="submit" value="Send">
			                    <input class="btn btn-primary btnEdit" name="reset" type="reset" value="Reset">

			                </div><!-- end buttons -->



			        </form><!-- end form -->
	            
	       		</div><!-- end col-sm-6 -->

				

			</div><!-- end row -->

			<div class="whitespace"></div>
			<div class="whitespace"></div>
			<div class="whitespace"></div>


		</div><!-- end container -->

		
		<footer class="footer">

			<div class="container">

				<div class="row">

					<div class="col-lg-6">

						<div>

							<p class="lgText">Copyright &copy 2017 Fierce Development | All rights reserved</p>

						</div>

					</div>

					<div class="col-sm-6">

						<ul class="social-links lgText">

							<li><a target="_blank" href="https://www.facebook.com/DanielsWebDesign/"><i class="ion-social-facebook"></i></a></li>
							<li><a target="_blank" href="https://twitter.com/DanielTech"><i class="ion-social-twitter"></i></a></li>
							<li><a target="_blank" href="#"><i class="ion-social-googleplus"></i></a></li>
							<li><a target="_blank" href="#"><i class="ion-social-instagram"></i></a></li>

						</ul>

					</div>

				</div>

			</div>

		</footer>

		<!-- jQuery -->

		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		
 		<script type="text/javascript">

		    $("form").submit(function (e) {

		        var error = "";

		        if ($("#email").val() == "") {

		            error += "The email field is required.<br>";

		        }

		        if ($("#subject").val() == "") {

		            error += "The subject field is required.<br>";

		        }

		        if ($("#content").val() == "") {

		            error += "The content field is required.<br>";

		        }

		        if (error != "") {

		            $("#error").html('<div class="alert alert-danger" role="alert"> <p><strong>There were error(s) in your form:</strong></p>' + error + '</div> ');

		            return false;

		        }else {

		            return true;

		        }

		    });

		</script>

	</body>

</html>