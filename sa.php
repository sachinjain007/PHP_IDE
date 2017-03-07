<html>
<body>
<?php

$myfile = fopen("output.php", "w") or die("Unable to open file!");
$txt = $_POST["name"];
fwrite($myfile, $txt);
fclose($myfile);

header("Location:inputcode.php")

?>


</body>
</html>