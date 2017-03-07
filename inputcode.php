<html>
<head>
<style>
#line {
    float:left;
	}
</style>
<script type="text/javascript">
 function settings(){

 parent.frames['main'].location.reload();
  } 
  function cleartextarea()
   { 
   document.getElementById('textarea').value='';

   }
   
  
   
 </script>
</head>
<body onLoad="settings()">

<form action="sa.php" method="post" name="form1">
<p><b>ENTER THE PHP CODE</b></p>
<textarea rows="28" cols="60"  class="textarea" id="textarea" name="name"><?php $f = fopen("output.php", "r");
		// Read line by line until end of file
		while(!feof($f)) { 
			echo fgets($f);
		}
		fclose($f);
		?></textarea>
		<div id="line">	
<img src ="line.png"/>
</div>
	<br>
	 <input type="submit" value="Wanna Submit">
	 <input type="button" value="Clear" onClick="cleartextarea()">
</form>

</body>

</html>