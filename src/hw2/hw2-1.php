<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HTML5 Bouncing Ball</title>
		<style type="text/css">
		
			#myCanvas {			
				border: 2px solid black;
				}
			
			button{
				font-size:20px;
				height:60px;
				width:120px;
				}
			
			table {
				border: 3px solid black;
				padding:20px;
				 
				
			}

			th, tr{
				border: 0px;
				align: center;
			
				
			}
		</style>
		
		<script type="text/javascript">
		var context;
		var dx=-2;
		var dy=-2;
		var y=250;
		var x=50;
		var intervalTime = 8;
		var boolStop = false;
		var setIntr = setInterval(draw, intervalTime);

		// Start btn functioanlity
		function startFunction() {;
		if (boolStop) {
        setIntr = setInterval(draw, intervalTime);
         boolStop = false;
			}
		}

		// Stop btn functioanlity
		function stopFunction() {
			clearInterval(setIntr);
			boolStop = true
		}
		
		function draw(){
		   context= myCanvas.getContext('2d');
		   // To erase the old cirlces
		   context.clearRect(0,0,400,400);
		   context.beginPath();
		   

		   // Draws a circle of radius 20 at the 
		   // coordinates (x,y) on the canvas
		   context.arc(x,y,30,0,Math.PI*2,true);
		   context.closePath();
		   context.fill();

		   // Boundary Logic
		   if ( x<0 || x>400) {
			dx=-dx;
			context.fillStyle="#0000ff";
		   }
		    
		   if ( y<0 || y>400){
			  dy=-dy;
			  context.fillStyle="#EF2B36";
			  }
			 
			x+=dx;
			y+=dy;
		}
		 
		 
	</script>
	
	</head>
	
	<body>
		<center>
		<h1>Bouncing a Ball Around with HTML5 and JavaScript</h1>
		<p> Copyright &copy Summer 2016:<i> Jaydipkumar Bhakta</i><p>
		<div id="container">
			<table>
				<tr >
					<td colspan="2">
						<canvas id="myCanvas" width="400" height="400"></canvas>
					</td>		
				</tr>
				<tr align="center">
					<td><button id= startBtn type="button" onclick="startFunction()">Start</button></td>
					<td><button id= stopBtn type="button" onclick="stopFunction()">Stop</button></td>
				</tr>	
			</table>
		</div>
		</center>
	

	</body>
</html>