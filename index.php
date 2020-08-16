<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$prefix = 'Series/Season1';
	$totalNumOfEp = 26;

    for ($i=1; $i <= $totalNumOfEp; $i++) { 
    	$pretitle = '[AnimeKayo] Soul Land Ep '.sprintf("%02d", $i).' 720p Eng Sub HEVC [Marshall]';
    	$title = $prefix.'/'.$pretitle;
    	echo "<br>".$pretitle."<br>";
    	echo '<video width="320" height="240" controls>
				  <source src="'.$title.'.mkv" type="video/mp4">
				  <track src="'.$title.'.vtt" kind="subtitles" label="English Subtitles" srclang="en"/>
				  Your browser does not support the video tag.
				</video>';
		echo "<br>";
    }

    // var_dump($files);
	?>
	
</body>
</html>