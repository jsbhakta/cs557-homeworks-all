<!doctype html>

<html>
	<head>
		<title>Survey Form</title>
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
		<script type="text/javascript">
			// button function
			var db = openDatabase('testDB', '1.0', 'Test DB', 2 * 1024 * 1024);
			
			db.transaction(function (tx) {
			   tx.executeSql("CREATE TABLE COLOR_NUMBER (color_code TEXT, number_id TEXT)");
			});
			
			function saveFunction() {
				
				var col = document.getElementById("color").value;
				var num = document.getElementById("number").value;
				var myArray = [];
				
				db.transaction(function (tx) {
					tx.executeSql('INSERT INTO COLOR_NUMBER (color_code, number_id) VALUES (col, num)');
				});	
				
			db.transaction(function (tx) {
				tx.executeSql('SELECT * FROM COLOR_NUMBER', [], function (tx, results) {
				var len = results.rows.length, i;
				for (i = 0; i < len; i++) {
					myArray[i] = results.rows.item(i);
                }
				}, null);
			 });
			 
			 alert( "Color: " + col + "\nNumber: " + num);
			 
			}
			
		
		</script>
	</head>
	
	<body>
		<div id = "status"></div>
		<div id = "form">
			<h1>Survey Form<br> with HTML5 and Java Script</h1>
			<p> Copyright &copy Summer 2016:<i> Jaydipkumar Bhakta</i><p>
			
			<fieldset>
				<legend>Survey Form </legend> 
				<p>
				<label id = "colorlbl"for="color">Color:</label> 
				<input type="color" id="color">
				</p>
				<label id="numlbl" for="Number">Number: </label>
				
				<input type="text" id="number" min="0" max="130"> <br>
				
				<p>
				<br>
				<button type="submit" onclick="saveFunction()">Save</button>
				</p>
			</fieldset>
		</div>
  
	</body>

</html>