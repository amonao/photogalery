<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="picStyle.css">
   <title>Slike</title>
</head>
<body>
<?php
$filelist = glob("../pics/*");

foreach($filelist as $filename){
	echo "<div><img src='".$filename."'></div><br>";
}
?>

</body>
"C:\xamppp\htdocs\pics"

</html>