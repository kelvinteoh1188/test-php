<!DOCTYPE html>
<html>
<body>

<?php
//header("Refresh: 3;");
echo "<h2>Hello World!</h2>";
echo "Hello world! Hacked<br>";
echo "This php website is served from ", gethostname(), "<br>";
echo "Contents of /opt <br>";
$data = scandir("/opt");
print_r($data);
?> 

</body>
</html> 
