<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>COLDPLAY</title>
<?php require_once "session.php";?>

<?php require_once "bootstrap1.php";?>
<style>
a {
    color: #38acff;
}
.head{
	
	text-align: center;
}
.login{

	margin: 0 auto;
    width: 340px;
}
body {

	background-image: url(img/back3.png);
    background-size: cover;
    overflow: scroll;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: white;
}


</style>
</head>
<body>
	<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$from="concertscoldplay@gmail.com";
$to=$_SESSION["mail"];
$password="PLAY1234";
$sub="BOOKING CONFIRM";
$body="Your transaction has been successfull.Ticket Details will be sent to you before 24 hours OF Concert";
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->setFrom('concertscoldplay@gmail.com', 'COLDPLAY CONCERTS');
$mail->Username = $from;
$mail->Password = $password;
$mail->Subject = $sub;
$mail->Body = $body;
$mail->AddAddress($to);
$mail->Send();
?>

<div class="login" style="padding-top: 2%;">
	
	<form action="home1.php" style="border: 1px solid;">
		<div class="head">
			<h1><b>Awesome!</b></h1>
		</div>
		<div class="bd1" style="text-align: center; padding: 14%;">
			<p style="padding-bottom: 10%;">Your transaction has been successfull. <br>Check your email for booking details.</P>
			<a href="index.php">Click here to goto Home Page.</a>  

		</div>
	</form>
</div>


</body>
</html>