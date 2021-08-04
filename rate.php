<!DOCTYPE html>
<html>
<head>
	<title>Convertion Site</title>
	
</head>
<style>
.box select {
    
    color: #050000;
    padding: 20px;    
    font-size: 17px;    
    -webkit-appearance: button;   
    width: 10%;
    font-weight: 600;
    padding-left: 0px;
}
.box input {
 
    color: #050000;
    padding: 20px;    
    font-size: 17px;    
    -webkit-appearance: button;   
    width: 10%;   
    font-weight: 600;
    padding-left: 0px;
}
.box::before {
  content: "\f13a";
  position: absolute;
  right: 0;
   width: 60px;
  height: 18%;
  text-align: center;
  font-size: 25px;
  line-height: 31px;
  color: rgba(255, 255, 255, 0.5); 
   background-color: rgba(255, 255, 255, 0.1); 
}


</style>
<body>
<div>
 <fieldset>
<h1 style="color:red";>Page 2  [Conversion Rate]</h1><br>
<h1 style="color:red";>Convertion Site</h1><br>
<div>
<h1> &nbsp;1. <a href="index.php">Home  </a> 
 &nbsp;2. <a href="rate.php">Conversion Rate  </a>
 &nbsp;3. <a href="info.php">History</a></h1>
</div><br><br>

<h1 style="color:red";>Conversion Rate :</h1><br>
		
		<div class="box" >
			
			<select name="drop" id="drop" onchange="myFunction()"class="form-control">
				
				<option value="feet to inch">feet to inch</option>
				<option value="inch to feet">inch to feet</option>

			</select>
			-----<input type="number" id="rname" name="rname" Value="1"readonly>
-----<input type="text" name="result" value="12" id="result" >
		</div><br><br>
		
		
	</form>
	 </fieldset>
</div>

<script>
function myFunction() {
var s = document.getElementById("drop");
var x = document.getElementById("rname");
 var y = document.getElementById("result");
  if (s.value == "feet to inch") {
     var h=(12*x.value);
 
  y.value = h;
  }
  else{ y.value = (x.value/12)}
  
}
</script>
</body>
</html>
  