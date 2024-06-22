<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dynamic Title</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<main>
		<?
			$files = file_get_contents('../db/db.txt');
			$piecesprov = preg_split("/\n/", $files);
			shuffle($piecesprov);
			for($i = 0; $i < count($piecesprov); $i++){
				$word = preg_split("/\: /", $piecesprov[$i]);
				$color = "#".rand(0,9).rand(0,9).rand(0,9);
				$size = 5+(int)$word[2];
				echo "<div><a href='$word[1].php'><font size=$size color=$color>$word[0]</font></a></div>";
			}
		?>
	</main>
</body>
</html>