<html>
<script>
function myFunction()
{

window.location.assign("21.php")

}
</script>
	<frameset rows="10%,*" onunload="myFunction()">
		<frame name="first" src="index - Copy.html"  frameborder="0" scrolling="no" >
	<frameset cols="50%,*" onunload="myFunction()">
		<frame name="left" src="inputcode.php">
		<frame name="main" src="output.php"  frameborder="0"  >	
</frameset>
</html>