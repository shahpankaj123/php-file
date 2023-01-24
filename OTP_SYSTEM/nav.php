<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to my websites</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: opx;
		}
		.navbar{
			background-color: #1F2226;
			

		}
		.navbar ul{
			padding: 15px;



		}
		.navbar ul li{
			display: inline;
			padding:5px 10px ;
			margin:10px;
            
		}
		.navbar ul li a{
			text-decoration: none;
			font-size: 20px;
			color: white;


		}
		.navbar .search{
			
			float: right;
			margin: -2px;

		}
		.navbar .search input{
			    border-radius: 5px;
                width: 133px;
                height: 22px;
		}
		.navbar ul li:hover{ 
			border-right: 5px solid green;
			border-left: 5px solid green;

		}
		.container{
			border: 2px solid gray;
			width: 650px;
			height: 500px;
			margin: auto;
			margin-top:120px ;
		}

		.container{
			background-color: gray;
		}
		.container .item1{
			margin: 65px 120px;
			padding: 10px;
			border: 1px solid black;
			width: 400px;
			height: 300px;
			box-shadow: 5px 5px 5px black;

		}
		.container h2{
			padding: 5px 20px;
			font-size: 40px;
		}
		.container label{
			padding: 0px 11px;
			font-size: 25px;
		}
		.container input{
			margin: 10px;
			padding: 5px 0px;
			width: 259px;
			border-radius: 5px;
		}
		.container .item1 .btn1 input{
			width: 75px;
			height: 30px;
			border-radius: 5px;
			margin: 10px 15px;
			font-size: 15px;
			

		}
	</style>

</head>
<body>
	<nav class="navbar" id="nav1">
		<ul type="none">
			<li><a href="welcome.php">Home</a></li>
			<li><a href="#">About</a></li>
			<li><a href="login.php">login</a></li>
            <?php
            
            if(isset($_SESSION['username']))
            {
			echo "<li><a href='logout.php'>logout</a></li>";
            }
            ?>
		
		<div class="search"><input type="text" placeholder="Search Here" width="60px" height="50px"></div>
	</ul>
	</nav>
        </body>
        </html>