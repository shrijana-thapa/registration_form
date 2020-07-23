<!DOCTYPE html>
	<html>
		<head>
			<title>registration form</title>
			<link rel="stylesheet" type="text/css" href="style.css">
		</head>
		<body>
			<div class="header">
			<h2>EVENT REGISTRATION FORM</h2></div>
			<div class="form">
				<form action="connect.php" method="POST">
					<label class="lab">YOUR NAME:</label>
					<input type="text" placeholder="your name" name="user" value="" id="text"required><br>
					<label class="lab">YOUR EMAIL:</label>
					<input type="email" placeholder="your email" name="ema" value="" id="text"required><br>
					<label class="lab">PHONENUMBER:</label>
					<input type="number" placeholder="phone number" value="" name="num" id="phone"required><br>
					<label class="lab">How many friends will you bring along?</label>
					<select name="per" id="per" required>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="3">7</option>
						<option value="3">8</option>

					</select><br>
					<label class="lab">When will you arrive?</label>
					<input type="date" name="dat" min="2020-07-24" max="2021-12-30" id="datee"required>
					<input type="time" name="tim" id="timee"required><br>
					<label class="lab">CHOOSE YOUR FAVOIRITE FOOD:</label><br>
					<input type="radio" name="foo" value="veg" id="food">veg<br>
					<input type="radio" name="foo" value="nonveg" id="food">non-veg<br>
					<label class="lab">CHOOSE YOUR FAVOURITE DRINK:</label><br>
					<input type="radio" name="dri" value="juice" id="food">juice<br>
					<input type="radio" name="dri" value="wine" id="food">wine<br>
					<input type="submit" value="SUBMIT" id="sub">
					
				</form></div>
		</body>
	</html>