<!doctype html>
<html>
<head>
	<title> CS557 All Homework</title>
	<style type="text/css">
		body {
			background-image: url("image/bg.jpg");
			background-size: cover;
			background-repeat:repeat-y;
			background-position:top center;
			background-attachment:fixed;
		}
				
		h1 { 
			font-size: 4em;
		} 		
		td{
			padding:20px;		
			color: olivedrab;
		}	
		#main{
			position: absolute;
			align: center;
			padding:20px;
			top:50%;
			left: 23%;
		}	
		a{
			color: white;
			font-size: 20px;
			font-weight: bold;
			padding: 20px;
		}
		p{
			color: yellow;
			font-size: 35px;
			font-weight: bold;
		}
		a:hover {
			color: grey;
		}
		a:link {
			text-decoration: none;
		}
		/*-----------------------media---------------*/	
		@media (max-width: 768px) {
				
			h1 { 
			 font-size: 45px;
			 } 
			h2{
				font-size: 25px;
			 }
			img {
				width: 100%;
				height: auto;
			}
			td{
				padding:15px;
			}
			#main{
				padding:5px;
				top:35%;
				left: 30%;
			}
			
			p{
				font-size: 35px;
				font-weight: bold;
			}
			a{
				font-size: 20px;
				padding: 5px;
			}
		} 
	
		@media (max-width: 320px) {
			h1{ 
				font-size: 25px;
			} 
			h2{
				font-size: 12px;
			}
			img {
				width: 100%;
				height: auto;
			}
			td{
				padding:5px;
			}
			#main{
				top:25%;
				left: 10%;
			}
			
			p{
				font-size: 25px;
				font-weight: bold;
			}
			a{
				font-size: 15px;
				padding: 5px;
			}
		} 
	</style>
	</head>
	<body>
		<div id = "headDiv">
			<table>
			  <tr>
				<td id = "imgtd" colspan = 1 rowspan = 2><img src="image\NPU Logo.png"  width="250" height="250" ></td>
			  </tr>
			  <tr>
				<td colspan = 1 rowspan = 1>
					<h1 id="top" > CS557 Web Front-End </h1>
					<h2> Copyright &copy Summer 2016:<i> Jaydipkumar Bhakta</i><h2>
				</td>	
			  </tr>	 
			</table>
		</div>
		
		<div id ="main">
			<p>Homework 1<br>
			<a href="src/hw1/hw1-1.php" target="_blank"> First HTML5 Page</a><br>
			<a href="src/hw1/hw1-2.php" target="_blank"> Calculator UI</a></p>
			
			<p>Homework 2<br>
			<a href="src/hw2/hw2-1.php" target="_blank">Bouncing Ball </a></p>
				
			<p>Homework 3<br>
			<a href="src/hw3/hw3-1.php" target="_blank">Tic-Tac-Toe</a></p>
		
			<p>Homework 4 <br>
			<a href="src/hw4/hw4-1.php" target="_blank">Survey Form</a></p>
			
			<p>Homework 5<br>
			<a href="src/hw5/hw5-1.php" target="_blank">Calculator Implementaion</a><br>
			<a href="src/hw5/hw5-2.php" target="_blank">Distance Calculator - Google Maps API</a> <br></p>
			
			<p>Homework 6<br>
			<a href="hw6/index.html" target="_blank">Web Socket Test</a><br>
			
			<p>Homework 7<br>
			<a href="src/hw7/index.js" target="_blank">Chat Broadcast - socket.io</a> <br></p>
			
			<p>Homework 10<br>
			<a href="src/hw10/main.html" target="_blank">Device Responsive Test</a> <br></p>
			
			<p><a href="#top">Go to top</a></p>
		</div>
		
	</body>
</html>