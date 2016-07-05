<!doctype html>

<html>

	<head>
		<title> Calculator Implimentation </title>
		<style>
			 form{
				position: absolute;
				left: 30%;
				top: 36%;
				width: 400px;
				padding-center: 20px;
				border: 1px solid;
				margin: 10px;
			}
			
			#sign{
				position: absolute;
				left: 30%;
				top: 10%;
				
			}
			#inputTxt{
				
				
			}
			
			[type|="button"] {
				padding: 15px 22px;
				font-size: 16px;
			}
			
		</style>
		<script>
			 
			var testbool = false; 
			var orgVal
			function signChange(newVal){
				var remain;
				var test;
				var pieces = newVal.split(/[\s-+*\/]+/);
				var lastVal= (pieces[pieces.length-1]);
				
				
				
				
				
				if(testbool === false){
					var arr = new Array();
					arr[0]="zzz";
					arr[1]=lastVal;
					test = newVal.split(new RegExp(arr.join("|")));
					remain= test.join("");
					testbool = true;
					return( remain.slice(0) +  "-"  + lastVal );
				} else {
					var arr = new Array();
					testbool = false;
					arr[0]="zzz";
					arr[1]=lastVal;
					test = newVal.split(new RegExp(arr.join("|")));
					remain= test.join("");
					return( remain.slice(0, -1) +""+ lastVal );
				}
				
				
				
				
			
			}
		</script>
	</head>
	
	<body>
		<div id ="sign">
			<h1>Calculator<br> with HTML5 and Java Script</h1>
			<p> Copyright &copy Summer 2016:<i> Jaydipkumar Bhakta</i><p>
		</div>
		<form name = "frame">
			<TABLE  BORDER=0  >			
				<TR>
						<td  width="100" height="50" colspan = 6 rowspan = 1 ><input id = "inputTxt" name="ReadOut" style="font-size:20px" type="Text" size=34 > </td>
					
				</tr >
				<tr >
					<td colspan = 2 rowspan = 1 > <INPUT TYPE="button" NAME="clear"   VALUE="  Clear  " OnClick="ReadOut.value = ''"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="ans"   VALUE="  =  " OnClick="ReadOut.value = eval(ReadOut.value)"></td>
					<td colspan = 2 rowspan = 1 > <INPUT TYPE="button" NAME="pm"   VALUE="  +/-  " OnClick="ReadOut.value = signChange(ReadOut.value)"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="dot"   VALUE="  .  " OnClick="ReadOut.value += '.'"></td>
				</tr>
				<tr >
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="times"   VALUE="  *  " OnClick="ReadOut.value += '*'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="divide"   VALUE="  /  " OnClick="ReadOut.value +='/' "></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="plus"   VALUE="  +  " OnClick="ReadOut.value += '+'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="minus"   VALUE="  -  " OnClick="ReadOut.value += '-'"></td>
				</tr>	
			</TABLE>
			<TABLE  BORDER=0>
				<tr >
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="one"   VALUE="  1  " OnClick="ReadOut.value += '1'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="two"   VALUE="  2 " OnClick="ReadOut.value += '2'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="three"   VALUE="  3  " OnClick="ReadOut.value += '3'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="four"   VALUE="  4  " OnClick="ReadOut.value += '4'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="five"   VALUE="  5  " OnClick="ReadOut.value += '5'"></td>
				</tr>
				<tr >
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="six"   VALUE="  6  " OnClick="ReadOut.value += '6'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="seven"   VALUE="  7  " OnClick="ReadOut.value += '7'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="eight"   VALUE="  8  " OnClick="ReadOut.value += '8'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="nine"   VALUE="  9  " OnClick="ReadOut.value += '9'"></td>
					<td colspan = 1 rowspan = 1 > <INPUT TYPE="button" NAME="zero"   VALUE="  0  " OnClick="ReadOut.value += '0'"></td>
				</tr>
			</TABLE>
		</form>
	</body>

</html>