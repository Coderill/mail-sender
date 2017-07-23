<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Mail Test | Coderill</title>

		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<form action="mail.php" method="post">
			<div class="">
				<input type="text" name="fname" required placeholder="First Name"/>
			</div>

			<div class="">
				<input type="text" name="lname" required placeholder="Last Name"/>
			</div>

			<div class="">
				<input type="text" name="birth" required placeholder="Date of Birth">
			</div>

			<div class="">
				<input type="text" name="streetaddress" required placeholder="Street Address">
			</div>

			<div class="">
				<input type="text" name="city" required placeholder="City">
			</div>

			<div class="">
				<input type="text" name="state" required placeholder="State">
			</div>

			<div class="">
				<input type="text" name="zipcode" required placeholder="Zip Code">
			</div>

			<div class="">
				<input type="email" name="email" required placeholder="Email Address">
			</div>

			<div class="">
				<input type="text" required placeholder="Phone Number" name="phone_number" maxlength="15">
			</div>

			<div class="">
				<select name="insurance" class="">
					<option value="" selected>Option Type</option>
					<option value="option one">One</option>
					<option value="option two">Two</option>
					<option value="option three">Three</option>
				</select>
			</div>

			<div class="">
				<label for="">
					<input type="checkbox" name="checking" value="check" required>
					<span>I Agree</span>
				</label>
			</div>

			<div class="form-group">
				<input type="submit" name="Send" value="Send"/>
			</div>
		</form>
	</body>
</html>
