<html>
<body>
<?php

$myfile = fopen("output.php", "w") or die("Unable to open file!");
$txt = "";
fwrite($myfile, $txt);
fclose($myfile);



?>


</body>
</html>