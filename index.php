
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<title>Send Email</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<div class="register">
			<h2>Send Email</h2>
			<form action="email-script.php" method="post" class="form-signin">
			<label>From email</label>
			<br>
			<input type="text" name="fromEmail" id="fromEmail" placeholder="Enter email">
			<br><br>
			<label>To email</label>
			<br>
			<input type="text" name="toEmail" id="mobile" placeholder="Enter email">
			<br><br>
			<label>subject</label>
			<br>
			<input type="text" name="subject" id="subject" placeholder="Enter subject">
			<br><br>
			<label>message</label>
			<br>
			<input type="text" name="message" id="message" placeholder="Enter message">
			<br><br>
			<input type="submit" name="sendMailBtn" value="submit" id="submits">Send Email</button>
			</form>
		</div>
	</div>

</body>
</html>