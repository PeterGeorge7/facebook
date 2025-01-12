<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
	<meta http-equiv="X-US Compatible" content="ie-edge" />
	<!-- <meta name="google-site-verification" content="LBUjeDYb8IBgpSxZiC3k2L6zsgBaJvfKQ-OT7FajlgU" /> -->
	<title>Facebook - log in or sign up</title>
	<link rel="shortcut icon" type="image/x-icon" href="../../img/favicon.ico" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="register.css" />
	<!-- <link rel="stylesheet" type="text/css" href="./css/responsive.css" /> -->
</head>

<body>
	<!-- Header Section Start -->
	<header class="header">
		<div class="container">
			<div class="brand-area">
				<img src="../../img/head-logo.png" alt="Facebook Logo" />
			</div>

			<div class="login-area">
				<form action="../../controller/LoginController.php" method="POST">
					<div class="email">
						<label for="email">Email or Phone</label>
						<input type="text" id="email" name="EmailOrPhone" required />
					</div>
					<div class="password">
						<label for="pass">Password</label>
						<input type="password" id="pass" name="password" required />
						<a href="#">Forgotten Password</a>
					</div>
					<div class="btn">
						<input type="submit" value="Log In" />
					</div>
				</form>
			</div>
		</div>
	</header>
	<!-- Header Section End -->

	<!-- Signup Section Start -->
	<section class="signup">
		<div class="container">
			<div class="connect-section">
				<h4>
					Facebook helps you connect and share with the people in
					your life
				</h4>
				<img src="../../img/people.png" />
			</div>

			<div class="form-section">
				<h2>Create an account</h2>
				<h4>It's quick and easy.</h4>

				<form action="../../controller/RegisterController.php" method="POST">
					<div class="fullname">
						<div class="firstname">
							<input type="text" placeholder="First name" name="fname" required />
						</div>
						<div class="surname">
							<input type="text" placeholder="Last name" name="lname" required />
						</div>
					</div>

					<input type="text" placeholder="Mobile number or email address" name="emailOrPhone" required />
					<input type="password" placeholder="New password" name="password" required />

					<div class="bday">
						<h4>Birthday</h4>
						<div class="bdate">
							<select name="birth_day">
								<!-- <option value="day">Day</option> -->
								<option value="01">1</option>
								<option value="02">2</option>
								<option value="03">3</option>
								<option value="04">4</option>
								<option value="05">5</option>
								<option value="06">6</option>
								<option value="07">7</option>
								<option value="08">8</option>
								<option value="09">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23" selected>23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<select name="birth_month">
								<!-- <option value="month">Month</option> -->
								<option value="01">Jan</option>
								<option value="02">Feb</option>
								<option value="03">Mar</option>
								<option value="04">Apr</option>
								<option value="05">May</option>
								<option value="06" selected>Jun</option>
								<option value="07">Jul</option>
								<option value="08">Aug</option>
								<option value="09">Sep</option>
								<option value="10">Oct</option>
								<option value="11">Nov</option>
								<option value="12">Dec</option>
							</select>
							<select name="birth_year">
								<!-- <option value="year">Year</option> -->
								<option value="2018">2018</option>
								<option value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010" selected>2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
							</select>
						</div>
						<div class="birth-link">
							<a href="#">
								Why do I need to provide my date of birth?
							</a>
						</div>
					</div>

					<div class="gender">
						<input type="radio" id="male" name="gender" value="Male" />
						<label for="male">Male</label>
						<input type="radio" id="female" name="gender" value="female" />
						<label for="female">Female</label>
					</div>

					<div class="text-box">
						<p>
							By clicking Sign Up, you agree to our
							<a href="#">Terms Data Policy</a> and
							<a href="#">Cookie Policy.</a> You may recive
							SMS notification from us and can opt out any
							time.
						</p>
					</div>
					<?php $showed = isset($_GET['error']) ? "block" : "none"; ?>
					<p style="color:red;display:<?= $showed ?>">Incorrect input</p>
					<div class="signup-btn">
						<input type="submit" value="Sign Up" />
					</div>
				</form>

				<span class="business">
					<a href="#">Create a page</a> for celebrity, band or
					business.
				</span>
			</div>
		</div>
	</section>
	<!-- Signup Section End -->

	<!-- Footer Section Start -->
	<footer class="footer">
		<div class="container">
			<div class="top">
				<ul>
					<li class="active"><a href="#">English (UK)</a></li>
					<li><a href="#">বাংলা</a></li>
					<li><a href="#">অসমীয়া</a></li>
					<li><a href="#">हिन्दी</a></li>
					<li><a href="#">Bahasa Indonesia</a></li>
					<li><a href="#">中文(简体)</a></li>
					<li><a href="#">العربية</a></li>
					<li><a href="#">Bahasa Melayu</a></li>
					<li><a href="#">Español</a></li>
					<li><a href="#">Português (Brasil)</a></li>
					<li><a href="#">+</a></li>
				</ul>
			</div>
			<hr />
			<div class="mid">
				<ul>
					<li><a href="#">Sign Up</a></li>
					<li><a href="#">Log In</a></li>
					<li><a href="#">Messenger</a></li>
					<li><a href="#">Facebook Lite</a></li>
					<li><a href="#">Watch</a></li>
					<li><a href="#">People</a></li>
					<li><a href="#">Pages</a></li>
					<li><a href="#">Page categories</a></li>
					<li><a href="#">Places</a></li>
					<li><a href="#">Games</a></li>
					<li><a href="#">Locations</a></li>
					<li><a href="#">Marketplace</a></li>
					<li><a href="#">Facebook Pay</a></li>
					<li><a href="#">Groups</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Oculus</a></li>
					<li><a href="#">Portal</a></li>
					<li><a href="#">Instagram</a></li>
					<li><a href="#">Local</a></li>
					<li><a href="#">Fundraisers</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Voting Information Centre</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Create ad</a></li>
					<li><a href="#">Create Page</a></li>
					<li><a href="#">Developers</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Cookies</a></li>
					<li><a href="#">Ad Choices</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Settings</a></li>
					<li><a href="#">Activity log</a></li>
				</ul>
			</div>
			<div class="end">
				<span>Facebook &copy; 2021</span>
			</div>
		</div>
	</footer>
	<!-- Footer Section End -->
</body>

</html>