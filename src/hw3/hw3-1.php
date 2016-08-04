<!doctype html>

<html>
	<head>
		<title>HTML5 Tic-Tac-Toe</title>
		<style>
			td {
				width: 150px;
				height: 150px; 
				text-align: center;
				overflow: hidden;
			}
			
			div{
				position: absolute;
				top: 10%;
				left: 30%;
				align: center;
				
			}
			table{
				table-layout:fixed; 
			}
			
			#divX{
				top: 20%;
				left: 80%;
			}
			#divO{
				top: 20%;
				left: 10%;
			}
		</style>
		
		<script>
			function allowDrop(ev) {
				ev.preventDefault();
			}

			function drag(ev) {
				ev.dataTransfer.setData("text", ev.target.id);
			}

			function drop(ev) {
				ev.preventDefault();
				var data = ev.dataTransfer.getData("text");
				ev.target.appendChild(document.getElementById(data));
				document.getElementById("demo").innerHTML = ev.target.appendChild(document.getElementById("text"));;
				
	
			}
		</script>
	</head>
	
	<body>
		<div>
			<h1>Tic-Tac-Toe with HTML5 and Java Script</h1>
			<p> Copyright &copy Summer 2016:<i> Jaydipkumar Bhakta</i><p>
			<p id="demo"></p>
			
			
			<TABLE  BORDER=1 ondrop="drop(event)" ondragover="allowDrop(event)" >
				<tr>
					<td id="drop1" colspan = 1 rowspan = 1 > </td>
					<td id="drop2"  colspan = 1 rowspan = 1 > </td>
					<td id="drop3" colspan = 1 rowspan = 1 > </td>
				</tr>
				<tr>
					<td id="drop4" colspan = 1 rowspan = 1 > </td>
					<td id="drop5"  colspan = 1 rowspan = 1 > </td>
					<td id="drop6" colspan = 1 rowspan = 1 > </td>
				</tr>	
				<tr>
					<td  id="drop7" colspan = 1 rowspan = 1 > </td>
					<td  id="drop8" colspan = 1 rowspan = 1 > </td>
					<td  id="drop9" colspan = 1 rowspan = 1 > </td>
				</tr>
			</TABLE>
			
		</div>
		<div id="divX">
		<img id="dragX1" src="X.png" draggable="true" ondragstart="drag(event)"><br>
		<img id="dragX2" src="X.png" draggable="true" ondragstart="drag(event)"><br>
		<img id="dragX3" src="X.png" draggable="true" ondragstart="drag(event)"><br>
		<img id="dragX4" src="X.png" draggable="true" ondragstart="drag(event)"><br>
		<img id="dragX5" src="X.png" draggable="true" ondragstart="drag(event)"><br>
		</div>
		<div id="divO">
		<img id="dragO1" src="O.png" draggable="true" ondragstart="drag(event)"><br>
		<img id="dragO2" src="O.png" draggable="true" ondragstart="drag(event)"><br>
		<img id="dragO3" src="O.png" draggable="true" ondragstart="drag(event)"><br>
		<img id="dragO4" src="O.png" draggable="true" ondragstart="drag(event)"><br>
		<img id="dragO5" src="O.png" draggable="true" ondragstart="drag(event)"><br>
		</div>
	</body>

</html>