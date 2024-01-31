<?php
$movie_name=$_REQUEST["film"];
list($title,$year)=file("$movie_name/info.txt");
$review_files=glob("$movie_name/review*.txt");
?>


<!doctype html>
<html lang="en">
<head>
<link href="movie.css" type="text/css" rel="stylesheet">
<meta charset="utf-8">
<title><?=$title ?> - Rancid Tomatoes</title>
</head>

<body id="Wrapper">
	<img src="banner.png" alt="Banner"/>
		<table>
			<tr>
				<th colspan="3"  class="heading">
					<?=$title ?> (<?=$year ?>)
				</th>
			</tr>
			<tr>
				<td><img src="<?=$movie_name ?>/overview.jpg" alt="<?=$title ?>"/> </td>
				<td colspan="2">
					<dl>
						<?php
						foreach (file("$movie_name/overview.txt") as $info_line)
						{
							list($term,$defn)=explode(":",$info_line);
						?>
						<dt><?=$term ?></dt>
						<dd><?=$defn ?></dd>
						
						<?php 
						}
						?>
					</dl>
				</td>
			</tr>
			<tr>
				<th colspan="3" class="heading">Review</th>
			</tr>
			<?php
			foreach($review_files as $reviewfile)
			{
				list($review,$rating,$critic,$publication)=file($reviewfile);
				$tomatoimage=strtolower(trim($rating));
				
			?>
			<tr class="review">
				<th><?=$critic ?><br><?=$publication ?></th>
				<td><img src="<?=$tomatoimage ?>.gif" alt="<?=$tomatoimage ?>"/></td>
				<td><?=$review ?></td>
			</tr>
			<?php
			}
			?>
		</table>
</body>
</html>
