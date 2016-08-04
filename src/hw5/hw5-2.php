<!doctype html>

<html>
	<head>
		<title>Distance Calculator</title>
		<style>
			div{
				position: absolute;
				top: 20%;
				left: 40%;	
			}
			
			button {
				margin-left: 150px;
				background-color: gray;
				border: none;
				color: white;
				padding: 10px 32px;
				text-align: center;
				display: inline-block;
				font-size: 16px;
			}
			
			fieldset{
				display: inline-block;
				float: right-side;	
			}
			
			label{
				float: left-side;
				margin: 30px;
			}
			
			
			#colorlbl{
				margin: 38px;
			}
			
		</style>
		     <script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3&key=AIzaSyBFA5rPKfpgjWAdOP6AWiRCsdNhERiv2AU
&sensor=false"></script>
		<script>
		   
			google.maps.event.addDomListener(window, 'load', function () {
				new google.maps.places.SearchBox(document.getElementById('add1'));
				new google.maps.places.SearchBox(document.getElementById('add2'));
			});

			var source, destination;
			var directionsService = new google.maps.DirectionsService();
					  
			function getPath() {
				source = document.getElementById("address1").value;
				destination = document.getElementById("address2").value;
			   
				
				var service = new google.maps.DistanceMatrixService();    
				service.getDistanceMatrix({
					origins: [source],
					destinations: [destination],
					travelMode: google.maps.TravelMode.DRIVING,
					unitSystem: google.maps.UnitSystem.IMPERIAL,
					avoidHighways: false,
					avoidTolls: false
				}, 
				function (response, status) 
				{
					if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS")
					{
						var distance = response.rows[0].elements[0].distance.text;
						var duration = response.rows[0].elements[0].duration.text;
						var dis = document.getElementById("distance");
						dis.innerHTML = "";
						dis.innerHTML += "" + distance + "<br />";
						

					} 
					else 
					{
						alert("Unable to find the Distance via Road......");
					}
				});
			}
		
			
		
		</script>
	</head>
	
	<body>
		<div id = "status"></div>
		<div id = "form">
			<h1>Distance Calculator<br> with HTML5 and Java Script</h1>
			<p> Copyright &copy Summer 2016:<i> Jaydipkumar Bhakta</i><p>
			
			<fieldset>
				<legend>Calculate Distance </legend> 
				<p>
				<label>Address 1:</label>
				<input type="text" id="address1" />
				</p>
				
				<label>Address 2:</label>
				<input type="text" id="address2" />
				
				<p>
				<br>
				<label>Distance:</label>
				<label id="distance"><b></b></label>
				</p>
				
				<p>
				<br>
				<button type="submit" onclick="getPath()" >Calculate</button>
				</p>
			</fieldset>
		</div>
  
	</body>

</html>