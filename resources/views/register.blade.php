<!DOCTYPE html>
<html>
	<head>
		<title>Form Sign Up</title>
	</head>
	<body>
		<h1>Buat Account Baru!</h1>

		<h3>Sign Up Form</h3>

		<form action="/welcome">
			
			<!-- First Name -->
			<label for="fname">First name:</label><br><br>
			<input type="text" id="fname" name="fname"><br><br>
			
			<!-- Last Name -->
			<label for="lname">Last name:</label><br><br>
			<input type="text" id="lname" name="lname"><br><br>
			
			<!-- Gender -->
			<label for="fgender">Gender:</label><br><br>
			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male</label><br>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label><br>
			<input type="radio" id="other" name="gender" value="other">
			<label for="other">Other</label><br><br>
			
			<!-- Nationality -->
			<label for="fnation">Nationality:</label><br><br>
			<select id="nationality" name="nationality">
				<option value="volvo">Indonesian</option>
				<option value="saab">Korean</option>
				<option value="fiat">Japanese</option>
				<option value="audi">Malaysian</option>
			</select><br><br>
			
			<!-- Bio -->
			<label for="fbio">Bio:</label><br><br>
			<textarea name="message" rows="10" cols="30">
			</textarea><br><br>
			
			<input type="submit" value="Submit">
		</form>

	</body>
	
</html>