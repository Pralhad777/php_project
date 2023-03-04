<!DOCTYPE html>
<html>
<head>
	<title>fixed menu</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		header {
			background-color: #333;
			color: #fff;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 60px;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0 20px;
			box-sizing: border-box;
		}

		nav {
	background-color: #333;
	position: fixed;
	top: 60px;
	left: 0;
	width: 200px;
	height: 100%;
	box-sizing: border-box;
	padding: 20px;
}

nav h2 {
	color: #fff;
	font-size: 1.2em;
	margin: 0 0 20px 0;
}

nav ul {
	list-style: none;
	padding: 0;
	margin: 0;
}

nav li {
	margin-bottom: 10px;
}

nav a {
	display: block;
	padding: 10px;
	background-color: #444;
	color: #fff;
	text-decoration: none;
	transition: background-color 0.3s ease;
}

nav a:hover {
	background-color: #555;
}

		section {
			margin-top: 60px;
			margin-left: 220px;
			padding: 20px;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<header>
		<div class='logo'>
			<img src='bunny.jpg' height='65' width='65' style='border-radius:20%;' alt='Logo'>
		</div>
		<div class='company-name'>
			My Company Name
		</div>
		<div class='address'>
			My Company Address
		</div>
	</header>
	<nav>
		<ul>
			<li><a href='#'>Home</a></li>
			<li><a href='#'>Performance</a></li>
			<li><a href='#'>Advice</a></li>
			<li><a href='#'>About</a></li>
			<li><a href='#'>Contact</a></li>
		</ul>
	</nav>
</body>
</html>
